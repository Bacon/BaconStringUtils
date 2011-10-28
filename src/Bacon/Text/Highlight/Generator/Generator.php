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
namespace Bacon\Text\Highlight\Generator;

/**
 * Output generator interface.
 * 
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
interface Generator
{
    /**
     * Open a tag.
     * 
     * @param  integer $state
     * @return void
     */
    public function openTag($state);

    /**
     * Close a tag.
     * 
     * @param  integer $state
     * @return void
     */
    public function closeTag($state);
    
    /**
     * Open a keyword tag.
     * 
     * @param  integer $keywordClass
     * @return void
     */
    public function openKeywordTag($keywordClass);

    /**
     * Close a keyword tag.
     * 
     * @param  integer $keywordClass
     * @return void
     */
    public function closeKeywordTag($keywordClass);
    
    /**
     * Append data to the generated output.
     * 
     * @return void
     */
    public function append($data);
}
