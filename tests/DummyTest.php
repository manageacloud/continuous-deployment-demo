<?php
require_once "PHPUnit/Autoload.php";

class DummyTest extends PHPUnit_Framework_TestCase
{
    public function testTalk() {
        $this->assertEquals("dummy", "dummy");
    }
}
