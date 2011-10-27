<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @namespace
 */
namespace Bacon\Text\Highlight\Parser;

/**
 * Source code parsser.
 * 
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Parser
{
    /**
     * Current syntax.
     * 
     * @var Syntax
     */
    protected $currentSyntax;
    
    /**
     * Loaded syntaxes.
     * 
     * @var array
     */
    protected $syntaxes = array();
    
    
    /**
     * Regex groups.
     * 
     * @var array
     */
    protected $regexGroups = array();
    
    /**
     * Get an input character.
     * 
     * @return string
     */
    protected function getInputChar()
    {
        $eol = $lineIndex = strlen($this->line);
        
        if ($eol) {
            $eol = false;
            
            if ($this->preFormatter->isEnabled()) {
                if (!$this->preFormatter->hasMoreLines()) {
                    $eof = $this->readNewLine($this->line);
                    $this->preFormatter->setLine($this->line);
                }
                
                $line = $this->preFormatter->getNextLine();
            } else {
                $eof = $this->readNewLine();
            }
            
            $lineIndex = 0;
            $this->lineNumber++;
            
            $this->matchRegex($this->line);
            
            return ($eof ? "\0" : "\n");
        }
        
        return $this->line[$lineIndex++];
    }
    
    /**
     * Read a newline.
     * 
     * @param  string $newLine
     * @return boolean
     */
    protected function readNewLine()
    {
        if ($this->lindeIndex) {
            $this->terminatingChar = $newLine[$this->lineIndex - 1];
        }
        
        if ($this->formattingPossible && $this->formattingEnabled) {
            $eof = !$this->formatter->hasMoreLines();
            
            if (!$eof) {
                $this->line = $this->formatter->getNextLine();
            }
        } else {
            $ewof = !$this->getLine();
        }
        
        return ($eof || $lthis->lineNumber === $this->lineCount);
    }
    
    /**
     * Get the current state.
     * 
     * @param integer $oldState
     */
    protected function getCurrentState($oldState)
    {
        $char = "\0";
        
        if (strlen($this->token) === 0) {
            $char = $this->getInputChar();
        } else {
            $this->lineIndex -= (strlen($this->token) - 1);
            $char             = $this->token[0];
        }
        
        if ($char === "\n") {
            return States::_EOL;
        } elseif ($char === "\0") {
            return States::_EOF;
        } elseif ($char === ' ' || $char === "\t") {
            $this->token = $char;
            return States::_WS;
        }
        
        if ($this->regexGroups) {
            $this->token = substr($this->line, $this->lineIndex - 1, $this->regexGroups[$this->lineIndex]['length']);
            $oldIndex    = $this->lineIndex;
            
            if (count($this->regexGroups[$oldIndex]) > 1) {
                $this->lineIndex += count($this->regexGroups) - 1;
            }
            
            if ($this->regexGroups[$oldIndex].getState() === States::EMBEDDED_CODE_BEGIN) {
                $this->embedLanguageDefinitionPath = $this->currentSyntax->getNewPath($this->regexGroups[$oldIndex]['name']);
            }
            
            if ($this->regexGroups[$oldIndex]['state'] === States::IDENTIFIER_BEGIN || $this->regexGroups[$oldIndex]['state'] === States::KEYWORD) {
                $reservedWord        = ($this->currentSyntax->shouldIgnoreCase() ? strtolower($token) : $token);
                $currentKeywordClass = $this->currentSyntax->isKeyword($reservedWord);
                
                if (!$currentKeywordClass && $this->regexGroups[$oldIndex]['state'] === States::KEYWORD) {
                    $currentKeywordClass = $this->regexGroups[$oldIndex]['keyword_class'];
                }

                return $this->validateState($currentKeywordClass ? States::KEYWORD : States::STANDARD, $oldState, $currentKeywordClass);
            } else {
                return $this->validateState($this->regexGroups[$oldIndex]['state'], $oldState, 0);
            }
        }
        
        $this->token = $char;
        return States::STANDARD;
    }
    
    /**
     * Validate the state through the current syntax.
     * 
     * @param  integer $newState
     * @param  integer $oldState
     * @param  integer $keywordClass
     * @return integer
     */
    protected function validateState($newState, $oldState, $keywordClass)
    {
        if (null !== ($function = $this->currentSyntax->validateStateChangeFunction())) {
            return $function($oldState, $newState, $this->token, $keywordClass);
        }
        
        return $newState;
    }
    
    /**
     * Process the root state.
     * 
     * @return void
     */
    protected function processRootState()
    {
        $eof       = false;
        $firstLine = true;
        
        $state = States::STANDARD;
        
        $this->openTag(States::STANDARD);
        
        do {
            $state = $this->getCurrentState(States::STANDARD);
            
            switch ($state) {
                case States::KEYWORD:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processKeywordState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::NUMBER:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processNumberState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::ML_COMMENT:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processMultiLineCommentState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::SL_COMMENT:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processSingleLineState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::STRING:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processStringState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::DIRECTIVE:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processDirectiveState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::ESC_CHAR:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processEscapeCharState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::SYMBOL:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processSymbolState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::EMBEDDED_CODE_BEGIN:
                case States::EMBEDDED_CODE_END:
                    $this->closeTag(States::STANDARD);
                    $eof = $this->processSyntaxChangeState($state);
                    $this->openTag(States::STANDARD);
                    break;
                
                case States::_EOL:
                    $this->insertLineNumber(!$firstLine);
                    $firstLine = false;
                    break;
                
                case States::_EOF:
                    $eof = true;
                    break;
                
                case States::_WS:
                    $this->processWhitespaceState();
                    break;
                
                default:
                    $this->printMaskedToken(true);
                    break;
            }
        } while (!$eof);
        
        $this->closeTag(States::STANDARD);
    }
}
