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

    public function testNEqual0(): void {
        $this->assertEquals("", PlayWithNumbers::decimalToRoman(0));
    }

    public function testNEqual1(): void {
        $this->assertEquals("I", PlayWithNumbers::decimalToRoman(1));
    }

    public function testNEqual2(): void {
        $this->assertEquals("II", PlayWithNumbers::decimalToRoman(2));
    }

    public function testNEqual4(): void {
        $this->assertEquals("IV", PlayWithNumbers::decimalToRoman(4));
    }

    public function testNEqual5(): void {
        $this->assertEquals("V", PlayWithNumbers::decimalToRoman(5));
    }

    public function testNEqual6(): void {
        $this->assertEquals("VI", PlayWithNumbers::decimalToRoman(6));
    }

    public function testNEqual7(): void {
        $this->assertEquals("VII", PlayWithNumbers::decimalToRoman(7));
    }

    public function testNEqual9(): void {
        $this->assertEquals("IX", PlayWithNumbers::decimalToRoman(9));
    }

    public function testNEqual10(): void {
        $this->assertEquals("IX", PlayWithNumbers::decimalToRoman(9));
    }
}