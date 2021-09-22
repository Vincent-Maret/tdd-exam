<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PlayWithNumbersTest extends TestCase
{
    /**
     * Tests for decimalToRoman
     */
    public function testNegativeValue(): void {
        $this->expectException(Exception::class);
        PlayWithNumbers::decimalToRoman(-5);
    }

    public function testNOver3000(): void {
        $this->expectException(Exception::class);
        PlayWithNumbers::decimalToRoman(4000);
    }
}