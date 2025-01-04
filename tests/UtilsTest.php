<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        // Сначала идет ожидаемое значение (expected)
        // И только потом актуальное (actual)
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
