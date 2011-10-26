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
    'description' => 'Octave',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'all_va_args', 'elseif', 'endfunction', 'global', 'return',
                'break', 'end', 'endif', 'gplot', 'try', 'catch',
                'end_try_catch', 'endwhile', 'gsplot', 'unwind_protect',
                'continue', 'end_unwind_protect', 'for',
                'ifunwind_protect_cleanup', 'else', 'endfor', 'function',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'DEFAULT_EXEC_PATH', 'current_script_file_name',
                'max_recursion_depth', 'variables_can_hide_functions',
                'DEFAULT_LOADPATH', 'debug_on_error',
                'octave_core_file_formatwarn_assign_as_truth_value', 'EDITOR',
                'debug_on_interrupt', 'octave_core_file_limit',
                'warn_divide_by_zero', 'EXEC_PATH', 'debug_on_warning',
                'octave_core_file_namewarn_empty_list_elements',
                'FFTW_WISDOM_PROGRAM', 'debug_symtab_lookups',
                'output_max_field_width', 'warn_fortran_indexing', 'IMAGEPATH',
                'default_save_formatoutput_precision',
                'warn_function_name_clash', 'INFO_FILE',
                'echo_executing_commandspage_output_immediatelywarn_future_time_stamp',
                'INFO_PROGRAM', 'fixed_point_format', 'page_screen_output',
                'warn_imag_to_real', 'LOADPATH', 'gnuplot_binary',
                'print_answer_id_name', 'warn_matlab_incompatible',
                'MAKEINFO_PROGRAM', 'gnuplot_command_axes',
                'print_empty_dimensions', 'warn_missing_semicolon', 'PAGER',
                'gnuplot_command_end', 'print_rhs_assign_val',
                'warn_neg_dim_as_zero', 'PS1', 'gnuplot_command_plot',
                'save_header_format_stringwarn_num_to_str', 'PS2',
                'gnuplot_command_replot', 'save_precision',
                'warn_precedence_change', 'PS4', 'gnuplot_command_splot',
                'saving_history', 'warn_reload_forces_clear',
                '__kluge_procbuf_delay__', 'gnuplot_command_title',
                'sighup_dumps_octave_core', 'warn_resize_on_range_error',
                '__nargin__',
                'gnuplot_command_usingsigterm_dumps_octave_corewarn_separator_insert',
                'ansgnuplot_command_with', 'silent_functions',
                'warn_single_quote_string', 'automatic_replot',
                'gnuplot_has_frames', 'split_long_rowswarn_str_to_num',
                'beep_on_errorhistory_file', 'string_fill_char',
                'warn_undefined_return_values', 'completion_append_char',
                'history_size', 'struct_levels_to_print',
                'warn_variable_switch_label',
                'crash_dumps_octave_coreignore_function_time_stamp',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'abs', 'asinh', 'cosh', 'floor', 'isalpha', 'isinf', 'isspace',
                'real', 'tan', 'acos', 'atan', 'erf', 'gammaisascii', 'islower',
                'isupper', 'roundtanh', 'acoshatanherfc', 'gammaln', 'iscntrl',
                'isna', 'isxdigitsign', 'toascii', 'angleceil', 'exp', 'imag',
                'isdigit', 'isnanlgamma', 'sin', 'tolower', 'arg', 'conj',
                'finite', 'is_nan_or_na', 'isfiniteisprint', 'log', 'sinh',
                'toupper', 'asin', 'cos', 'fix', 'isalnum', 'isgraph',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
