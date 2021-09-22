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

        $milestones = [10 => 'X', 5 => 'V'];
        $romanN = "";

        foreach($milestones as $milestone => $value) {
            if ($n >= $milestone - 1) {
                $valueToAdd = $value;
                $n -= $milestone;
    
                if ($n === -1) {
                    $valueToAdd= 'I' . $valueToAdd;
                }
            
                $romanN .= $valueToAdd;
            }    
        }

        for ($i = 0; $i < $n; $i++) {
            $romanN .= 'I';
        }

        return $romanN;
    }
}
