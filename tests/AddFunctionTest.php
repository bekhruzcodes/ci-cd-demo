<?php

use PHPUnit\Framework\TestCase;

require_once 'index.php';

class AddFunctionTest extends TestCase
{
    public function testAddPositiveNumbers()
    {
        $this->assertEquals(5, add(2, 3));
    }
}