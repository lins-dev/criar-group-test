<?php

namespace App\Actions;


class ConvertTimeToSecondsAction
{

    public static function handle(string $time): float
    {
        $parts = explode(':', $time);
        $seconds = 0;

        if (count($parts) === 3) { // Hora:minuto:segundo
            $seconds += $parts[0] * 3600;
            $seconds += $parts[1] * 60;
            $seconds += $parts[2];
        } elseif (count($parts) === 2) { // Minuto:segundo
            $seconds += $parts[0] * 60;
            $seconds += $parts[1];
        }

        return (float) $seconds;

    }


}