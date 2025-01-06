<?php

namespace App\Http\Controllers;


use App\Services\RaceService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RaceController extends Controller
{

    public function __construct(protected RaceService $service)
    {
        // 
    }

    public function result(): View
    {
        try {
            $pilots = $this->service->calculateResultRace();            
            return view('race.results', compact('pilots'));
        } catch (\Throwable $th) {
            return view('generic_error');
        }
        
    }

    
    public function bestLap(Request $request): View
    {
        try {
            $bestLaps = $this->service->calculateBestLap();
            return view('race.best_laps', compact('bestLaps'));
        } catch (\Throwable $th) {
            return view('generic_error');
        }
        
    }

    
    public function bestLapInRace(): View
    {
        try {
            $bestLapsInRace = $this->service->calculateBestLapInRace();
            return view('race.best_lap_in_race', compact('bestLapsInRace'));
        } catch (\Throwable $th) {
            return view('generic_error');
        }
    }

    
    public function diffWinner(): View
    {
        try {
            $diffWinner = $this->service->calculateDiffWinner();
            return view('race.diff_winner', compact('diffWinner'));
        } catch (\Throwable $th) {
            return view('generic_error');
        }
        
    }

}
