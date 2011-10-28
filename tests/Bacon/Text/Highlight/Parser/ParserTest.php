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
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @namespace
 */
namespace BaconTest\Text\Highlight\Parser;

use PHPUnit_Framework_TestCase as TestCase,
    Bacon\Text\Highlight\Parser\Parser;

/**
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class ParserTest extends TestCase
{
    protected $parser;
    
    public function setUp()
    {
        $this->parser = new Parser();
    }

    public function testSimpleFile()
    {
        $simpleFile = fopen(__DIR__ . '/assets/simple.php', 'r');
        $result     = $this->parser->parse($simpleFile, 'php');
        fclose($simpleFile);
        
        var_dump($result);
    }
}