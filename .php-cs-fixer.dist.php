<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('includes/external')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@PHP82Migration' => true,
        'header_comment' => false,
        'single_class_element_per_statement' => false,
        'no_leading_import_slash' => false,
        'declare_strict_types' => false,
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'declare_equal_normalize' => false,
        'lowercase_cast' => false,
        'lowercase_keywords' => true,
        'blank_line_between_import_groups' => false,
        'compact_nullable_type_declaration' => false,
        'ordered_class_elements' => false,
        'ordered_imports' => false,
        
        'visibility_required' => [
             'elements' => ['property', 'method'], 
        ],
    ])
    ->setFinder($finder)
;