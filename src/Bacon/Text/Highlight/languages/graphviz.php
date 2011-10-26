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
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
return array(
    'description' => 'Graphviz',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bottomlabel', 'color', 'comment', 'distortion', 'fillcolor',
                'fixedsize', 'fontcolor', 'fontname', 'fontsize', 'group',
                'height', 'label', 'layer', 'orientation', 'peripheries',
                'regular', 'shape', 'shapefile', 'sides', 'skew', 'style',
                'toplabel', 'width', 'z', 'arrowhead', 'arrowsize', 'arrowtail',
                'color', 'comment', 'constraint', 'decorate', 'dir',
                'fontcolor', 'fontname', 'fontsize', 'headlabel', 'headport',
                'headurl', 'label', 'labelangle', 'labeldistance', 'labelfloat',
                'labelfontcolor', 'labelfontname', 'labelfontsize', 'layer',
                'lhead', 'ltail', 'minlen', 'samehead', 'sametail', 'style',
                'taillabel', 'tailport', 'tailurl', 'weight', 'bgcolor',
                'center', 'clusterrank', 'color', 'comment', 'compound',
                'concentrate', 'fillcolor', 'fontcolor', 'fontname', 'fontpath',
                'fontsize', 'label', 'labeljust', 'labelloc', 'layers',
                'margin', 'mclimit', 'nodesep', 'nslimit', 'nslimitl',
                'ordering', 'orientation', 'page', 'pagedir', 'quantum', 'rank',
                'rankdir', 'ranksep', 'ratio', 'remincross', 'rotate',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'none', 'normal', 'inv', 'dot', 'odot', 'invdot', 'invodot',
                'open', 'halfopen', 'empty', 'invempty', 'diamond', 'odiamond',
                'box', 'obox', 'tee', 'crow', 'box', 'polygon', 'ellipse',
                'circle', 'point', 'egg', 'triangle', 'plaintext', 'diamond',
                'trapezium', 'parallelogram', 'house', 'hexagon', 'octagon',
                'doublecircle', 'doubleoctagon', 'tripleoctagon', 'invtriangle',
                'invtrapezium', 'invhouse', 'mdiamond', 'msquare', 'mcircle',
                'record', 'mrecord', 'epsf', 'turquoise', 'antiquewhite',
                'coral', 'darkgoldenrod', 'azure', 'crimson', 'gold', 'bisque',
                'darksalmon', 'goldenrod', 'aliceblue', 'blanchedalmond',
                'deeppink', 'greenyellow', 'blue', 'cornsilk', 'firebrick',
                'lightgoldenrod', 'blueviolet', 'floralwhite', 'hotpink',
                'lightgoldenrodyellow', 'cadetblue', 'gainsboro', 'indianred',
                'lightyellow', 'cornflowerblue', 'ghostwhite', 'lightpink',
                'palegoldenrod', 'darkslateblue', 'honeydew', 'lightsalmon',
                'yellow', 'deepskyblue', 'ivory', 'maroon', 'yellowgreen',
                'dodgerblue', 'lavender', 'mediumvioletred', 'indigo',
                'lavenderblush', 'orangered', 'lightblue', 'lemonchiffon',
                'palevioletred', 'chartreuse', 'lightskyblue', 'linen', 'pink',
                'darkgreen', 'lightslateblue', 'mintcream', 'red',
                'darkolivegreen', 'mediumblue', 'mistyrose', 'salmon',
                'darkseagreen', 'mediumslateblue', 'moccasin', 'tomato',
                'forestgreen', 'midnightblue', 'navajowhite', 'violetred',
                'green', 'navy', 'oldlace', 'greenyellow', 'navyblue',
                'papayawhip', 'browns', 'lawngreen', 'powderblue', 'peachpuff',
                'beige', 'lightseagreen', 'royalblue', 'seashell', 'brown',
                'limegreen', 'skyblue', 'snow', 'burlywood', 'mediumseagreen',
                'slateblue', 'thistle', 'chocolate', 'mediumspringgreen',
                'steelblue', 'wheat', 'darkkhaki', 'mintcream', 'white',
                'khaki', 'olivedrab', 'whitesmoke', 'peru', 'palegreen',
                'blueviolet', 'rosybrown', 'seagreen', 'darkorchid',
                'saddlebrown', 'springgreen', 'darkviolet', 'darkslategray',
                'sandybrown', 'yellowgreen', 'magenta', 'dimgray', 'sienna',
                'mediumorchid', 'gray', 'tan', 'mediumpurple', 'gray',
                'aquamarine', 'mediumvioletred', 'lightgray', 'oranges', 'cyan',
                'orchid', 'lightslategray', 'darkorange', 'darkturquoise',
                'palevioletred', 'slategray', 'orange', 'lightcyan', 'plum',
                'orangered', 'mediumaquamarine', 'purple', 'mediumturquoise',
                'violet', 'black', 'paleturquoise', 'violetred', 'true',
                'solid', 'dashed', 'dotted', 'bold', 'invis', 'filled',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\{\\}|\\-|\\>|\\<|\\:|\\.|\\;|\\,',
    'ignore_case' => true,
);
