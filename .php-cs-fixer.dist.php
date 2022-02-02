<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'\app')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@Symfony' => true
    ])
    ->setFinder($finder)
;