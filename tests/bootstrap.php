<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

chdir(__DIR__);

if (!file_exists('../vendor/autoload.php')) {
    throw new \RuntimeException('vendor/autoload.php not found. Run a composer install.');
}

$autoloader = include '../vendor/autoload.php';
$autoloader->add('MatryoshkaTest', __DIR__);
