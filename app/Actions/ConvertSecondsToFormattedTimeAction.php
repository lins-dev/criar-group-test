<?php

namespace App\Actions;


class ConvertSecondsToFormattedTimeAction
{

    public static function handle(float $seconds): string
    {
        $minutes = floor($seconds / 60);
        $remainingSeconds = floor($seconds % 60);

        $milliseconds = round(($seconds - floor($seconds)) * 1000);

        return sprintf('%02d:%02d.%03d', $minutes, $remainingSeconds, $milliseconds);

    }


}