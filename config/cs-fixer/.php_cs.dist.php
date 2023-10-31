<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in('src');

$config = new PhpCsFixer\Config();
$config->setUsingCache(true);
$config->setCacheFile('temp/csfixer-cache.json');
$config->setFinder($finder);

return $config;

