<?php

/** @noinspection UnusedFunctionResultInspection */

/** @noinspection TransitiveDependenciesUsageInspection */

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/bin',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);
    $ecsConfig->lineEnding('\n');
    $ecsConfig->sets([
        SetList::COMMON,
        SetList::CLEAN_CODE,
        SetList::PSR_12,
    ]);

    $ecsConfig->ruleWithConfiguration(ArraySyntaxFixer::class, [
            'syntax' => 'short',
        ]);

    $ecsConfig->ruleWithConfiguration(PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer::class, [
        'const' => 'single',
        'property' => 'single',
        'method' => 'multi',
    ]);

    $ecsConfig->ruleWithConfiguration(PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, [
        'sort_algorithm' => 'alpha',
        'imports_order' => ['class', 'function', 'const'],
    ]);

    $ecsConfig->ruleWithConfiguration(PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer::class, [
        'import_classes' => true,
        'import_constants' => true,
        'import_functions' => true,
    ]);

    $ecsConfig->ruleWithConfiguration(PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer::class, [
        'case' => 'snake_case',
    ]);
};
