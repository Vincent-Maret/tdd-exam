<?php

declare(strict_types=1);

final class PlayWithNumbers
{
    public static function decimalToRoman(int $n): string
    {
        if ($n < 0) {
            throw new Exception('Unexpected: n should be greater than 0');
        } else if ($n > 3000) {
            throw new Exception('Unexpected: n should be lower or equal to 3000');
        }

        $romanN = "";

        if ($n >= 10 - 1) {
            $romanN .= 'X';

            $n -= 10;

            if ($n === -1) {
                $romanN = 'I' . $romanN;
            }
        }

        if ($n >= 5 - 1) {
            $value = 'V';

            $n -= 5;

            if ($n === -1) {
                $value = 'I' . $value;
            }

            $romanN .= $value;
        }

        for ($i = 0; $i < $n; $i++) {
            $romanN .= 'I';
        }

        return $romanN;
    }
}
