<?php

namespace App\Services;

use App\Actions\CalculateBestLapAction;
use App\Actions\CalculateBestLapActionInRace;
use App\Actions\CalculateDiffWinnerAction;
use App\Actions\MakePilotsAction;
use App\Repository\LapRepository;

class RaceService
{
    protected array $repository;
    public function __construct()
    {
        $this->repository = LapRepository::handle() ;
    }


    public function calculateResultRace(): array
    {
        $laps = $this->repository;
        $pilots = MakePilotsAction::handle($laps);

        usort($pilots, function ($a, $b) {
            return strtotime($a["finish_lap_hour"]) <=> strtotime($b["finish_lap_hour"]);
        });

        foreach ($pilots as $index => &$pilot) {
            $pilot['position'] = $index + 1;
        }
        
        return $pilots;
    }

    public function calculateBestLap(): array
    {
        
        $laps = $this->repository;
        $bestLaps = CalculateBestLapAction::handle($laps);
        return $bestLaps;
    }

    public function calculateBestLapInRace(): object
    {
        
        $laps = $this->repository;
        $bestLaps = CalculateBestLapActionInRace::handle($laps);
        return $bestLaps;
    }

    public function calculateDiffWinner(): array
    {
        
        $laps = $this->repository;
        $pilots = MakePilotsAction::handle($laps);
        $diff = CalculateDiffWinnerAction::handle($pilots);
        return $diff;
    }
}
