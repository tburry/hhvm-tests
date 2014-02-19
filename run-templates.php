<?php
require_once __DIR__.'/vendor/autoload.php';


$fn = require_once __DIR__.'/template00.php';
echo Test\Helpers::fetch($fn, ['goodbye', 'Goodbye', 'GOODBYE']);

echo "\n---\n\n";

$fn = require_once __DIR__.'/template01.php';
echo Test\Helpers::fetch($fn, ['goodbye' => true, 'world' => 'WORLD']);