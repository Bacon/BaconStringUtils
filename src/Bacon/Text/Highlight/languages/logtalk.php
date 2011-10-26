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
    'description' => 'Logtalk',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '^\\s*:-\\s((el)?if)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 1,
            'regex' => '^\\s*:-\\s(e(lse|ndif))(?=\\.)',
            'group' => 1,
        ),
        array(
            'id' => 2,
            'regex' => '(?<!0\')[A-Z_]\\w*',
        ),
        array(
            'id' => 3,
            'regex' => '(after|before)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 4,
            'regex' => '(::|\\^\\^|<<|:)',
        ),
        array(
            'id' => 1,
            'regex' => '^\\s*:-\\s(category|protocol|object)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 1,
            'regex' => '^\\s+((extend|i(mp(or|lemen)t|nstantiate)|specialize)s)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 1,
            'regex' => '^\\s*:-\\s(end_(protocol|category|object))(?=\\.)',
            'group' => 1,
        ),
        array(
            'id' => 1,
            'regex' => '^\\s*:-\\s(calls|public|protected|private|encoding|ensure_loaded|export|info|initialization|alias|dynamic|discontiguous|meta_predicate|mode|module|multifile|reexport|set_logtalk_flag|set_prolog_flag|synchronized|op|uses|use_module)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 1,
            'regex' => '^\\s*:-\\s(dynamic|synchronized|threaded)(?=\\.)',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(after|before)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(parameter|this|se(lf|nder))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(current_predicate|predicate_property)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(expand_(goal|term))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((?:goal|term)_expansion|phrase)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((abolish|c(reate|urrent))_(object|protocol|category))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((object|protocol|category)_property)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(complements_object)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(extends_(object|protocol|category))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(imp(lements_protocol|orts_category))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((instantiat|specializ)es_class)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(current_event|(abolish|define)_events)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((current|set)_logtalk_flag)(?=[\\(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(logtalk_(compile|l(ibrary_path|oad)))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(clause|retract(all)?)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(a(bolish|ssert(a|z)))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(call|catch|throw)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(fail|true)',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(bagof|setof|findall|forall)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(threaded(_(call|once|ignore|exit|peek|wait|notify))?)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(unify_with_occurs_check)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(functor|arg|copy_term)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(rem|mod|abs|sign)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(float(_(integer|fractional)_part)?)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(floor|truncate|round|ceiling)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(cos|atan|exp|log|s(in|qrt))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(var|atomic|atom|integer|float|compound|nonvar|number)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((curren|se)t_(in|out)put)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(open|close)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(flush_output)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(flush_output)',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(stream_property|at_end_of_stream|set_stream_position)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(at_end_of_stream)',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(nl|(get|peek|put)_(byte|char|code))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(nl)',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(read(_term)?)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(write(q|_(canonical|term))?)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((current_)?op)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((current_)?char_conversion)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(atom_(length|c(hars|o(ncat|des))))(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(char_code|sub_atom)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(number_c(har|ode)s)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '((?:se|curren)t_prolog_flag)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(halt)',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(halt)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(once)(?=[(])',
            'group' => 1,
        ),
        array(
            'id' => 3,
            'regex' => '(repeat)',
            'group' => 1,
        ),
        array(
            'id' => 4,
            'regex' => '(::|\\^\\^|<<|:)',
        ),
        array(
            'id' => 4,
            'regex' => '([{}])',
        ),
        array(
            'id' => 4,
            'regex' => '(\\\\\\+|->|=\\.\\.|;|!|:-|\\^)',
        ),
        array(
            'id' => 4,
            'regex' => '(is|mod|rem|//|[+\\-]|/(?!\\*)|(?<=\\*)/|[*][*])',
        ),
        array(
            'id' => 4,
            'regex' => '(=<|<|=:=|=\\\\=|>=|>)',
        ),
        array(
            'id' => 4,
            'regex' => '(@<|@=<|==|\\\\==|@>|@>=)',
        ),
        array(
            'id' => 4,
            'regex' => '(=|\\\\=)',
        ),
        array(
            'id' => 4,
            'regex' => '(\\?|@)',
        ),
        array(
            'id' => 4,
            'regex' => '(/\\\\|\\\\/|>>|\\\\)',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '%',
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
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-',
    'ignore_case' => false,
);
