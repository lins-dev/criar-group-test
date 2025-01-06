<?php

namespace App\Actions;


class CalculateDiffWinnerAction
{

    public static function handle(array $pilots): array
    {
        $winnerTime = min(array_column($pilots, 'total_time'));
        foreach ($pilots as &$pilot) {
            $pilot['time_after_winner'] = $pilot['total_time'] - $winnerTime;
            $pilot['time_after_winner_formatted'] = ConvertSecondsToFormattedTimeAction::handle($pilot['time_after_winner']);
        }

        return $pilots;
    }


}