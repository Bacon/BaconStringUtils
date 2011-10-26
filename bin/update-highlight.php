#!/usr/bin/php
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
 * Language definiton parser.
 * 
 * Language definitions are written in LUA, but highlight only uses a small
 * subset of it, so we can safely do a simple parsing. Still this parser is
 * heavily based on assumptions about current (3.6) highlight language files,
 * so it *may* break in future versions.
 * 
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class LanguageDefinitionParser {   
    /**
     * Parser regexes.
     */
    const REGEX_IDENTIFIER = '[a-zA-Z_]\w*';
    const REGEX_NUMBER     = '(?:0x|0X)[0-9a-fA-F]+|\d*[\.]?\d+(?:[eE][\-\+]\d+)?[lLuU]*';
    const REGEX_ESCSEQ     = '\\\\u[A-Fa-f0-9]{4}|\\\\\\d{3}|\\\\x[A-Fa-f0-9]{2}|\\\\[ntvbrfa\\\\\\?\'"]';

    /**
     * Load a langauge definition.
     * 
     * @param  string $path
     * @return array
     */
    public function load($path)
    {
        if (!file_exists($path) || !is_readable($path)) {
            return null;
        }
        
        $def = $this->parseDef(file_get_contents($path));
        
        return $this->defToCode($def);
    }
    
    /**
     * Convert a definition to PHP code.
     * 
     * @param  array $def 
     * @return string
     */
    protected function defToCode(array $def)
    {
        $code = "<" . "?php" . "\n";
        
        $code .= "/**\n"
               . " * Bacon.\n"
               . " *\n"
               . " * LICENSE\n"
               . " *\n"
               . " * This source file is subject to the new BSD license that is bundled\n"
               . " * with this package in the file LICENSE.txt.\n"
               . " * If you did not receive a copy of the license and are unable to\n"
               . " * obtain it through the world-wide-web, please send an email\n"
               . " * to mail@dasprids.de so I can send you a copy immediately.\n"
               . " *\n"
               . " * @package    Bacon_Text\n"
               . " * @subpackage Highlight\n"
               . " * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>\n"
               . " * @license    New BSD License\n"
               . " */\n";
        
        if (isset($def['dofile'])) {
            $code .= "return array_replace_recursive(array(\n";
        } else {
            $code .= "return array(\n";
        }
        
        $indent = str_repeat(' ', 4);
        
        $code .= $indent . "'description' => " . (is_array($def['Description']) ? $def['Description'][0] : "'" . addslashes($def['Description']) . "'") . ",\n";
        
        if (isset($def['Keywords'])) {
            $code .= $indent . "'keywords' => array(\n";
            $indent = str_repeat(' ', 8);
            
            // Some language files are a bit strange, workaround
            if (isset($def['Keywords']['Id'])) {
                $keyword = array('Id' => $def['Keywords']['Id']);
                unset($def['Keywords']['Id']);
                
                if (isset($def['Keywords']['List'])) {
                    $keyword['List'] = $def['Keywords']['List'];
                    unset($def['Keywords']['List']);
                }
                
                if (isset($def['Keywords']['Regex'])) {
                    $keyword['Regex'] = $def['Keywords']['Regex'];
                    unset($def['Keywords']['Regex']);
                }
                
                if (isset($def['Keywords']['Group'])) {
                    $keyword['Regex'] = $def['Keywords']['Group'];
                    unset($def['Keywords']['Group']);
                }
            }

            foreach ($def['Keywords'] as $keyword) {
                $code .= $indent . "array(\n";
                $indent = str_repeat(' ', 12);
                
                $code .= $indent . "'id' => " . $keyword['Id'] . ",\n";
                
                if (isset($keyword['List'])) {
                    $code .= $indent . "'list' => array(\n";
                    $indent = str_repeat(' ', 15);
                    
                    $lineLength = $indent;
                    $line       = '';
                    
                    foreach ($keyword['List'] as $keywordName) {
                        $keywordValue = " " . (is_array($keywordName) ? $keywordName[0] : "'" . addslashes($keywordName) . "'") . ",";
                        
                        if (strlen($indent . $line . $keywordValue) > 80) {
                            $code .= $indent . $line . "\n";
                            $line  = '';
                        }
                        
                        $line .= $keywordValue;
                    }
                
                    $indent = str_repeat(' ', 12);
                    $code .= $indent . "),\n";
                }
                
                if (isset($keyword['Regex'])) {
                    $code .= $indent . "'regex' => " . (is_array($keyword['Regex']) ? $keyword['Regex'][0] : "'" . addslashes($keyword['Regex']) . "'") . ",\n";
                }
                
                if (isset($keyword['Group'])) {
                    $code .= $indent . "'group' => " . $keyword['Group'] . ",\n";
                }
                
                $indent = str_repeat(' ', 8);
                $code .= $indent . "),\n";
            }
            
            $indent = str_repeat(' ', 4);
            $code .= $indent . "),\n";
        }
        
        if (isset($def['Comments'])) {
            $code .= $indent . "'comments' => array(\n";
            $indent = str_repeat(' ', 8);
            
            foreach ($def['Comments'] as $comment) {
                $code .= $indent . "array(\n";
                $indent = str_repeat(' ', 12);
                
                $code .= $indent . "'block' => " . ($comment['Block'] ? 'true' : 'false') . ",\n";
                
                if (isset($comment['Nested'])) {
                    $code .= $indent . "'nested' => " . ($comment['Nested'] ? 'true' : 'false') . ",\n";    
                }
                
                $code .= $indent . "'delimiter' => array(\n";
                $indent = str_repeat(' ', 16);
                
                $code .= $indent . "'open' => " . (is_array($comment['Delimiter'][0]) ? $comment['Delimiter'][0][0] : "'" . addslashes($comment['Delimiter'][0]) . "'") . ",\n";
                
                if (isset($comment['Delimiter'][1])) {
                    $code .= $indent . "'close' => " . (is_array($comment['Delimiter'][1]) ? $comment['Delimiter'][1][0] : "'" . addslashes($comment['Delimiter'][1]) . "'") . ",\n";
                }
                
                $indent = str_repeat(' ', 12);
                $code .= $indent . "),\n";    
                
                $indent = str_repeat(' ', 8);
                $code .= $indent . "),\n";
            }
            
            $indent = str_repeat(' ', 4);
            $code .= $indent . "),\n";
        }
        
        if (isset($def['Strings'])) {
            $code .= $indent . "'strings' => array(\n";
            $indent = str_repeat(' ', 8);

            if (isset($def['Strings']['Delimiter'])) {
                $code .= $indent . "'delimiter' => " . (is_array($def['Strings']['Delimiter']) ? $def['Strings']['Delimiter'][0] : "'" . addslashes($def['Strings']['Delimiter']) . "'") . ",\n";
            } 
            
            if (isset($def['Strings']['DelimiterPairs'])) {
                $code .= $indent . "'delimiter_pairs' => array(\n";
                $indent = str_repeat(' ', 12);
                
                foreach ($def['Strings']['DelimiterPairs'] as $pair) {
                    $code .= $indent . "array(\n";
                    $indent = str_repeat(' ', 16);
                    
                    $code .= $indent . "'open' => " . (is_array($pair['Open']) ? $pair['Open'][0] : "'" . addslashes($pair['Open']) . "'") . ",\n";
                    $code .= $indent . "'close' => " . (is_array($pair['Close']) ? $pair['Close'][0] : "'" . addslashes($pair['Close']) . "'") . ",\n";
                    
                    if (isset($pair['Raw'])) {
                        $code .= $indent . "'raw' => " . ($pair['Raw'] ? 'true' : 'false') . ",\n";
                    }
                
                    $indent = str_repeat(' ', 12);
                    $code .= $indent . "),\n";
                }
                
                $indent = str_repeat(' ', 8);
                $code .= $indent . "),\n";
            }
            
            if (isset($def['Strings']['Escape'])) {
                $code .= $indent . "'escape' => " . (is_array($def['Strings']['Escape']) ? $def['Strings']['Escape'][0] : "'" . addslashes($def['Strings']['Escape']) . "'") . ",\n";
            }
            
            if (isset($def['Strings']['RawPrefix'])) {
                $code .= $indent . "'raw_prefix' => " . (is_array($def['Strings']['RawPrefix']) ? $def['Strings']['RawPrefix'][0] : "'" . addslashes($def['Strings']['RawPrefix']) . "'") . ",\n";
            }
            
            $indent = str_repeat(' ', 4);
            $code .= $indent . "),\n";
        }
        
        if (isset($def['PreProcessor'])) {
            $code .= $indent . "'pre_processor' => array(\n";
            $indent = str_repeat(' ', 8);

            $code .= $indent . "'prefix' => " . (is_array($def['PreProcessor']['Prefix']) ? $def['PreProcessor']['Prefix'][0] : "'" . addslashes($def['PreProcessor']['Prefix']) . "'") . ",\n";
            
            if (isset($def['PreProcessor']['Continuation'])) {
                $code .= $indent . "'continuation' => " . (is_array($def['PreProcessor']['Continuation']) ? $def['PreProcessor']['Continuation'][0] : "'" . addslashes($def['PreProcessor']['Continuation']) . "'") . ",\n";
            }
            
            $indent = str_repeat(' ', 4);
            $code .= $indent . "),\n";
        }
        
        if (isset($def['NestedSections'])) {
            $code .= $indent . "'nested_sections' => array(\n";
            $indent = str_repeat(' ', 8);

            foreach ($def['NestedSections'] as $section) {
                $code .= $indent . "'lang' => " . (is_array($section['Lang']) ? $section['Lang'][0] : "'" . addslashes($section['Lang']) . "'") . ",\n";
                
                $code .= $indent . "'delimiter' => array(\n";
                $indent = str_repeat(' ', 12);
                
                $code .= $indent . "'open' => " . (is_array($section['Delimiter'][0]) ? $section['Delimiter'][0][0] : "'" . addslashes($section['Delimiter'][0]) . "'") . ",\n";
                $code .= $indent . "'close' => " . (is_array($section['Delimiter'][1]) ? $section['Delimiter'][1][0] : "'" . addslashes($section['Delimiter'][1]) . "'") . ",\n";
                
                $indent = str_repeat(' ', 8);
                $code .= $indent . "),\n";
            }
            
            $indent = str_repeat(' ', 4);
            $code .= $indent . "),\n";
        }

        if (isset($def['Digits'])) {
            $code .= $indent . "'digits' => " . (is_array($def['Digits']) ? $def['Digits'][0] : "'" . addslashes($def['Digits']) . "'") . ",\n";
        }
        
        if (isset($def['Operators'])) {
            $code .= $indent . "'operators' => " . (is_array($def['Operators']) ? $def['Operators'][0] : "'" . addslashes($def['Operators']) . "'") . ",\n";
        }
        
        if (isset($def['EnableIndentation'])) {
            $code .= $indent . "'enable_indentation' => " . ($def['EnableIndentation'] ? 'true' : 'false') . ",\n";
        }
        
        if (isset($def['IgnoreCase'])) {
            $code .= $indent . "'ignore_case' => " . ($def['IgnoreCase'] ? 'true' : 'false') . ",\n";
        }
        
        if (isset($def['OnStateChange'])) {
            $lines     = explode("\n", $def['OnStateChange']);
            $firstLine = array_shift($lines);
            
            $code .= $indent . "'on_state_change' => " . $firstLine . "\n";
            
            foreach ($lines as $line) {
                $code .= $indent . $line . "\n";
            }
            
            $code = rtrim($code) . ",\n";
        }
        
        if (isset($def['dofile'])) {
            $code .= "), include __DIR__ . '" . $def['dofile'] . ".php');\n";
        } else {
            $code .= ");\n";
        }

        return $code;
    }

    /**
     * Parse a definition.
     * 
     * @param  string $def
     * @return array
     */
    protected function parseDef($def)
    {
        $root         = new \ArrayObject();
        $stack        = new \SplStack();
        $length       = strlen($def);
        $offset       = 0;
        $variableName = null;
        
        $stack->push($root);
        
        while ($offset < $length) {
            $current = $stack->top();

            if (preg_match('(\G\s+)', $def, $matches, null, $offset)) {
                // Skip whitespace
                $offset += strlen($matches[0]);
                continue;
            }
            
            if (preg_match('(\G--.*?(?:\n|$))', $def, $matches, null, $offset)) {
                // Skip comments
                $offset += strlen($matches[0]);
                continue;
            }
            
            if (preg_match('(\G\s*dofile\([^"]*"([^.]+)\.lang"\))', $def, $matches, null, $offset)) {
                // dofile call
                $root['dofile'] = $matches[1];
                $offset += strlen($matches[0]);
                continue;
            }
            
            if (preg_match('(\G\s*function OnStateChange\(\s*oldState\s*,\s*newState*,\s*token\s*\))s', $def, $matches, null, $offset)) {
                // OnStateChange function, this match is pretty hackish
                $offset += strlen($matches[0]);
                $root['OnStateChange'] = 'function($oldState, $newState, $token) {' . "\n" . $this->parseFunction($def, $offset, $length);
                continue;
            }
            
            if (preg_match('(\G\s*table\.insert\(([A-Za-z0-9]+),)s', $def, $matches, null, $offset)) {
                // table.insert
                if (!isset($root[$matches[1]])) {
                    $block           = new \ArrayObject();
                    $root[$matches[1]] = $block;
                    $stack->push($block);
                } else {
                    $stack->push($root[$matches[1]]);
                }
                            
                $offset += strlen($matches[0]);
                continue;
            }

            if (preg_match('(\G\s*([A-Za-z0-9]+)\s*=\s*("|\{|\[\[))', $def, $matches, null, $offset)) {
                // Variable definition
                $offset       += strlen($matches[0]);
                $variableName  = $matches[1];

                if ($matches[2] === '"') {
                    // String
                    if (preg_match('(\G((?:[^"\\\\]*(?:\\\\"|(?:\\\\\\\\)+|(?="))))")', $def, $matches, null, $offset)) {
                        $offset                 += strlen($matches[0]);
                        $current[$variableName]  = trim(stripslashes($matches[1]));
                        continue;
                    } else {
                        throw new \RuntimeException('Could not parse string');
                    }
                } elseif ($matches[2] === '[[') {
                    // String
                    if (preg_match('(\G(.*?)\]\])', $def, $matches, null, $offset)) {
                        $offset                 += strlen($matches[0]);
                        $current[$variableName]  = trim($matches[1]);
                        continue;
                    } else {
                        throw new \RuntimeException('Could not parse regex');
                    }
                } elseif ($matches[2] === '{') {
                    // Block
                    $current[$variableName] = new \ArrayObject();
                    $stack->push($current[$variableName]);
                    continue;
                }
            }
            
            if (preg_match('(\G\s*([A-Za-z0-9]+)\s*=\s*(true|false|nil|Identifiers|\d+)\s*)', $def, $matches, null, $offset)) {
                // Variable definition
                $offset       += strlen($matches[0]);
                $variableName  = $matches[1];
                
                if (is_numeric($matches[2])) {
                    $current[$variableName] = (int) $matches[2];
                } elseif ($matches[2] === 'true') {
                    $current[$variableName] = true;
                } elseif ($matches[2] === 'false') {
                    $current[$variableName] = false;
                } elseif ($matches[2] === 'nil') {
                    $current[$variableName] = null;
                } elseif ($matches[2] === 'Identifiers') {
                    $current[$variableName] = array('self::REGEX_IDENTIFIER');
                }
                continue;
            }
            
            if (preg_match('(\G\s*\))', $def, $matches, null, $offset)) {
                // Closing table.insert
                $stack->pop();
                $offset += strlen($matches[0]);
                continue;
            }

            if (count($stack) > 1) {           
                if (preg_match('(\G\s*([\{\},]))', $def, $matches, null, $offset)) {
                    // Anonymous Closing block
                    $offset += strlen($matches[0]);

                    if ($matches[1] === '}') {
                        $stack->pop();
                    } elseif ($matches[1] === '{') {
                        $block     = new \ArrayObject();
                        $current[] = $block;
                        $stack->push($block);
                    }
                    continue;
                }
                
                if (preg_match('(\G\s*("|\{|\[\[))', $def, $matches, null, $offset)) {
                    // Value
                    $offset += strlen($matches[0]);

                    if ($matches[1] === '"') {
                        // String
                        if (preg_match('(\G((?:[^"\\\\]*(?:\\\\"|(?:\\\\\\\\)+|(?="))))")', $def, $matches, null, $offset)) {
                            $offset    += strlen($matches[0]);
                            $current[]  = stripslashes($matches[1]);
                            continue;
                        } else {
                            throw new \RuntimeException('Could not parse string');
                        }
                    } elseif ($matches[1] === '[[') {
                        // String
                        if (preg_match('(\G(.*?)\]\])', $def, $matches, null, $offset)) {
                            $offset    += strlen($matches[0]);
                            $current[]  = $matches[1];
                            continue;
                        } else {
                            throw new \RuntimeException('Could not parse regex');
                        }
                    }
                }
            }

            throw new \RuntimeException('General parse error near: ' . substr($def, $offset, 40));
        }
        
        return $this->arrayObjectToArray($root);
    }
    
    /**
     * Parse a function.
     * 
     * @param  string  $def
     * @param  integer $offset
     * @param  integer $length
     * @return string
     */
    protected function parseFunction($def, &$offset, $length)
    {
        $result = '';
        $level  = 1;

        while ($offset < $length) {
            if ($level === 0) {
                break;
            }
            
            if (preg_match('(\G\s+)', $def, $matches, null, $offset)) {
                // Skip whitespace
                $offset += strlen($matches[0]);
                continue;
            }
            
            if (preg_match('(\G\s*if(.*?)then)s', $def, $matches, null, $offset)) {
                // If statement
                $offset += strlen($matches[0]);
                $result .= str_repeat(' ', $level * 4) . "if (";
                $level++;
                
                $luaComparisions = explode('and', $matches[1]);
                $phpComparisions = array();
                
                foreach ($luaComparisions as $comparision) {
                    list($left, $right) = explode('==', $comparision);
                    
                    $right = trim($right);
                    
                    if ($right[0] === '"') {
                        $right = preg_replace('(^"(.*)"$)', "\\1", $right);
                        $right = stripslashes($right);
                        $right = "'" . addslashes($right) . "'";
                    } else {
                        if (in_array($right, array('oldState', 'newState', 'token'))) {
                            $right = '$' . $right;
                        } else {
                            $right = 'self::' . $right;
                        }
                    }
                    
                    $phpComparisions[] = '$' . trim($left) . ' === ' . $right;
                }
                
                $result .= implode(' && ', $phpComparisions);
                $result .= ") {\n";
                continue;
            }
            
            if (preg_match('(\G\s*end)', $def, $matches, null, $offset)) {
                // End statement
                $offset += strlen($matches[0]);
                $level--;
                $result .= str_repeat(' ', $level * 4) . "}\n\n";
                continue;
            }
            
            if (preg_match('(\G\s*return\s*([^\s]+))', $def, $matches, null, $offset)) {
                // Return statement
                $offset += strlen($matches[0]);
                
                if (in_array($matches[1], array('oldState', 'newState', 'token'))) {
                    $return = '$' . $matches[1];
                } else {
                    $return = 'self::' . $matches[1];
                }
                
                $result .=  str_repeat(' ', $level * 4) . 'return ' . $return . ";\n";
                continue;
            }
        }

        return rtrim($result);
    }
    
    /**
     * Convert an ArrayObject to an array recursively.
     * 
     * @param  \ArrayObject $object 
     * @return array
     */
    protected function arrayObjectToArray(\ArrayObject $object)
    {
        $array = $object->getArrayCopy();
        
        foreach ($array as $key => $value) {
            if ($value instanceof \ArrayObject) {
                $array[$key] = $this->arrayObjectToArray($value);
            }
        }
        
        return $array;
    }
}

if (!isset($argv[1])) {
    echo "Usage: " . basename(__FILE__) . " path/to/highlight/langDefs\n";
    exit(65);
}

$files  = glob(rtrim($argv[1], '/') . '/*.lang');
$parser = new \LanguageDefinitionParser();

foreach ($files as $file) {
    preg_match('(/([^./]+)\.lang$)', $file, $matches);

    echo "Processing " . $file . "\n";
    file_put_contents(__DIR__ . '/../src/Bacon/Text/Highlight/languages/' . $matches[1] . '.php', $parser->load($file));
}



