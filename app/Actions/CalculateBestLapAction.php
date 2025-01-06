<?php

namespace App\Actions;


class CalculateBestLapAction
{

    public static function handle(array $laps): array
    {
        $bestLaps = [];
        foreach ($laps as $row) {
            $kart = $row->kart_number;
            $time_lap = ConvertTimeToSecondsAction::handle($row->time_lap);
            
            if (!isset($bestLaps[$kart]) || $time_lap < $bestLaps[$kart]["time_lap"]) {
                $bestLaps[$kart] = [
                    "pilot_name" => $row->pilot_name,
                    "kart_number" => $kart,
                    "time_lap" => $time_lap,
                    "lap_number" => $row->lap_number,
                    "time_lap_formatted" => ConvertSecondsToFormattedTimeAction::handle($time_lap),
                ];
            }
        }

        return $bestLaps;
    }


}