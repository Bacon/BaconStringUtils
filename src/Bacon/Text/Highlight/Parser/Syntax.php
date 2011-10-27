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
 * Syntax representation.
 * 
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Syntax
{
    /**
     * Syntax data.
     * 
     * @var array
     */
    protected $data = array(
        'ignore_case'        => false,
        'enable_indentation' => false,
        'on_state_change'    => null,
    );
    
    /**
     * Create a new syntax.
     * 
     * @param type $language 
     */
    public function __construct($language)
    {
        $languagePath = __DIR__ . '/../languages/' . $language . '.php';
        
        if (!file_exists($languagePath)) {
            throw new Exception\InvalidArgumentException(sprintf('Language "%s" does not exist', $language));
        }
        
        $data = array_replace_recursive($this->data, include $languagePath);
    }
    
    /**
     * Check if keywords are case-insensitive.
     * 
     * @return boolean
     */
    public function shouldIgnoreCase()
    {
        return $this->data['ignore_case'];
    }
    
    /**
     * Get the function to validate states.
     * 
     * @return \Closure
     */
    public function validateStateChangeFunction()
    {
        return $this->data['on_state_change'];
    }
}
