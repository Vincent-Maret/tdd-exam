<?php

declare(strict_types=1);

final class PlayWithNumbers
{
    public static function decimalToRoman(int $n): string {
        if ($n < 0) {
            throw new Exception('Unexpected: n should be greater than 0');
        } else if ($n > 3000) {
            throw new Exception('Unexpected: n should be lower or equal to 3000');
        }
    }
}