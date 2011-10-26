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
    'description' => 'Frink',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'if', 'then', 'else', 'for', 'to', 'step', 'next', 'use',
                'while', 'var', 'class', 'interface', 'return', 'mod', 'div',
                'conforms', 'square', 'sq', 'cubic', 'cu', 'squared', 'cube',
                'is', '', 'true', 'TRUE', 'false', 'FALSE', '', 'and', 'AND',
                'or', 'OR', 'NOT', 'not', 'nand', 'NAND', 'nor', 'NOR', 'xor',
                'XOR', 'implies', 'IMPLIES', 'dict', 'println', 'sin', 'cos',
                'tan', 'sec', 'csc', 'cot', 'arcsin', 'arccos', 'arcsin',
                'arccsc', 'arcsec', 'arccot', 'arctan', 'floor', 'ceil',
                'round', 'round', 'int', 'trunc', 'inv', 'recip', 'sqrt', 'log',
                'ln', 'abs', 'format', 'format', 'random', 'randomBits',
                'bitLength', 'modPow', 'binary', 'ternary', 'trinary',
                'quaternary', 'quinary', 'senary', 'sexenary', 'septenary',
                'octal', 'oct', 'octonary', 'nonary', 'decimal', 'denary',
                'undenary', 'duodecimal', 'duodenary', 'tridecimal',
                'quattuordecimal', 'quindecimal', 'hexadecimal', 'sexadecimal',
                'hex', 'septendecimal', 'octodecimal', 'nonadecimal',
                'vigesimal', 'char', 'uppercase', 'uc', 'lowercase', 'lc',
                'substr', 'substring', 'substrLen', 'substringLen', 'timezone',
                'timezones', 'now', 'deltaT', 'subst', 'split', 'join', 'lines',
                'read', 'stripHTML', 'url', 'urlHost', 'urlProtocol', 'select',
                'sort', '', 'newJava', 'callJava', 'staticJava', 'English',
                'en', 'German', 'Deutsch', 'de', 'Spanish', 'Espanol',
                'Español', 'es', 'French', 'Francais', 'Français', 'fr',
                'Italian', 'Italiano', 'it', 'Portuguese', 'pt', 'Korean', 'ko',
                'SimplifiedChinese', 'zh', 'TraditionalChinese', 'Chinese',
                'zt', 'Russian', 'ru', 'Japanese', 'jp', 'Dutch', 'Nederlands',
                'nl', 'FromEnglish', 'from_en', 'FromGerman', 'from_de',
                'FromSpanish', 'from_es', 'FromFrench', 'from_fr',
                'FromItalian', 'from_it', 'FromPortuguese', 'from_pt',
                'FromJapanese', 'from_ja', 'FromKorean', 'from_ko',
                'FromRussian', 'from_ru', 'Default	FromSimplifiedChinese',
                'from_zh', 'FromTraditionalChinese', 'FromChinese', 'from_zt',
                'FromDutch', 'from_nl', 'EnglishToGerman', 'en_de',
                'EnglishToSpanish', 'en_es', 'EnglishToFrench', 'en_fr',
                'EnglishToItalian', 'en_it', 'EnglishToPortuguese', 'en_pt',
                'EnglishToKorean', 'en_ko', 'EnglishToJapanese', 'en_ja',
                'EnglishToRussian', 'en_ru', 'EnglishToSimplifiedChinese',
                'en_zh', 'EnglishToTraditionalChinese', 'en_zt',
                'EnglishToDutch', 'en_nl', 'GermanToEnglish', 'Englisch',
                'de_en', 'GermanToFrench', 'franzoesisch', 'Franzoesisch',
                'französisch', 'Französisch', 'de_fr', 'SpanishToEnglish',
                'Inglés', 'Ingles', 'es_en', 'SpanishToFrench', 'frances',
                'Frances', 'francés', 'Francés', 'es_fr', 'FrenchToEnglish',
                'Anglais', 'fr_en', 'FrenchToGerman', 'Allemand', 'allemand',
                'fr_de', 'FrenchToSpanish', 'Espagnol', 'espagnol', 'fr_es',
                'FrenchToPortuguese', 'Portugais', 'portugais', 'fr_pt',
                'FrenchToItalian', 'Italien', 'italien', 'fr_it',
                'ItalianToEnglish', 'Inglese', 'it_en', 'ItalianToFrench',
                'Francese', 'francese', 'it_fr', 'PortugueseToEnglish',
                'Inglês', 'pt_en', 'PortugueseToFrench', 'francês', 'Francês',
                'pt_fr', 'JapaneseToEnglish', 'ja_en', 'KoreanToEnglish',
                'ko_en', 'RussianToEnglish', 'ru_en',
                'SimplifiedChineseToEnglish', 'zh_en',
                'TraditionalChineseToEnglish', 'ChineseToEnglish', 'zt_en',
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
    ),
    'strings' => array(
        'delimiter' => '\"\"\"||\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\|\\=|\\/|\\*|\\%|\\|\\+|\\-',
    'ignore_case' => false,
);
