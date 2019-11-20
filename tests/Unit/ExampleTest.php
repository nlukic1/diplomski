<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testOne()
    {
        $a = 5;
        $b = 3;
        $c = $a + $b;
        $this->assertEquals(8, $c);
    }

    public function testTwo()
    {
        $a = 5;
        $b = 3;
        $c = $a - $b;
        $this->assertEquals(2, $c);
    }
}
