<?php
// This should pass on hhvm.


require_once __DIR__.'/vendor/autoload.php';


$fn = require_once __DIR__.'/template00.php';
echo Test\Helpers::fetch($fn, ['goodbye', 'Goodbye', 'GOODBYE']);