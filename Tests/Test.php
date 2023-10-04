<?php

namespace Tests;

use TestFoo;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testTestFoo()
    {
        self::assertEquals(1, 1);
    }

    public function testFooClassExist()
    {
        self::assertFileExists("src/FooClass.php");
    }


}
