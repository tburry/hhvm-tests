<?php

use Test\Helpers;

class DefaultTests extends PHPUnit_Framework_TestCase {

   public function testTemplate00() {
      $fn = require_once PATH_ROOT . '/template00.php';

      $expected = "Before callback\nIn callback goodbye\nIn callback Goodbye\nIn callback GOODBYE\nAfter callback\n";
      $actual = Helpers::fetch($fn, ['goodbye', 'Goodbye', 'GOODBYE']);

      $this->assertEquals($expected, $actual);
   }

    public function testTemplate01() {
        $fn = require_once PATH_ROOT . '/template01.php';

        $expected = "GOODBYE cruel WORLD!";
        $actual = Helpers::fetch($fn, ['goodbye' => true, 'world' => 'WORLD']);

        $this->assertEquals($expected, $actual);
    }
}