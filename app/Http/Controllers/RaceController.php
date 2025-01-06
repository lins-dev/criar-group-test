<?php

namespace App\Http\Controllers;


use App\Services\RaceService;
use Illuminate\Http\Request;

class RaceController extends Controller
{

    public function __construct(protected RaceService $service)
    {
        // 
    }

    public function result()
    {
        $pilots = $this->service->calculateResultRace();
        return view('race.results', compact('pilots'));
    }

    
    public function bestLap(Request $request)
    {
        $bestLaps = $this->service->calculateBestLap();
        return view('race.best_laps', compact('bestLaps'));
    }

    
    public function bestLapInRace()
    {
        $bestLapsInRace = $this->service->calculateBestLapInRace();
        return view('race.best_lap_in_race', compact('bestLapsInRace'));
    }

    
    public function diffWinner()
    {
        $diffWinner = $this->service->calculateDiffWinner();
        return view('race.diff_winner', compact('diffWinner'));
    }

}
