<?php

namespace App\Actions;


class CalculateBestLapActionInRace
{

    public static function handle(array $laps): object
    {
        $bestLap = null;
        $bestTime = PHP_FLOAT_MAX;
        foreach ($laps as $row) {
            $currentLapTime = ConvertTimeToSecondsAction::handle($row->time_lap);
            if ($currentLapTime < $bestTime) {
                $bestTime = $currentLapTime;
                $bestLap = $row;
            }
            
        }

        return $bestLap;
    }


}