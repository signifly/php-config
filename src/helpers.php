<?php

namespace Signifly;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return (new Config)
        ->setFinder($finder)
        ->setRules($rules)
        ->setRiskyAllowed(true)
        ->setUsingCache(true);
}
