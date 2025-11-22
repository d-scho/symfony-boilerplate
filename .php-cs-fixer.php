<?php

declare(strict_types=1);

$finder = new PhpCsFixer\Finder()
    ->in(__DIR__)
    ->append([__DIR__ . '/bin/console'])
    ->exclude('var')
;

return new PhpCsFixer\Config()
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_after_opening_tag' => true,
        'braces_position' => true,
        'compact_nullable_type_declaration' => true,
        'concat_space' => ['spacing' => 'one'],
        'control_structure_braces' => true,
        'control_structure_continuation_position' => true,
        'declare_strict_types' => true,
        'global_namespace_import' => ['import_classes' => true, 'import_constants' => false, 'import_functions' => false],
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'native_function_casing' => true,
        'new_with_parentheses' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_multiple_statements_per_line' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_superfluous_elseif' => true,
        'no_trailing_comma_in_singleline' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unused_imports' => true,
        'no_whitespace_in_blank_line' => true,
        'ordered_imports' => true,
        'php_unit_method_casing' => ['case' => 'snake_case'],
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_no_access' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_to_comment' => [
            'ignored_tags' => ['var']
        ],
        'phpdoc_scalar' => true,
        'phpdoc_trim' => true,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
        'phpdoc_types' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'single_quote' => true,
        'single_space_around_construct' => true,
        'single_trait_insert_per_statement' => true,
        'statement_indentation' => true,
        'type_declaration_spaces' => true,
        'void_return' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => false,
    ])
    ->setFinder($finder)
;