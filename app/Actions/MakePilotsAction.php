<?php

namespace App\Actions;

use Illuminate\Support\Carbon;

class MakePilotsAction
{

    public static function handle(array $laps): array
    {
        $pilots = [];
        foreach ($laps as $row) {
            $kart = $row->kart_number;
            $time_lap = ConvertTimeToSecondsAction::handle($row->time_lap);
            $averageSpeed = $row->average_speed;

            if (! isset($pilots[$kart])) {
                $pilots[$kart] = [
                    "pilot_name" => $row->pilot_name,
                    "kart_number" => $kart,
                    "laps" => 0,
                    "total_time" => 0,
                    "last_hour" => $row->hour,
                    'total_speed' => 0,
                ];
            }

            $pilots[$kart]["laps"]++;
            $pilots[$kart]['total_speed'] += $averageSpeed;
            $pilots[$kart]["total_time"] += $time_lap;
            $pilots[$kart]["last_hour"] = $row->hour;
            $pilots[$kart]["finish_lap_hour"] = (Carbon::createFromFormat("H:i:s.u", $row->hour))->addSeconds($time_lap);
        }

        return $pilots;
    }


}