<?php

namespace App\Repository;



class LapRepository
{
    
    public static function handle(): array
    {
        return json_decode(file_get_contents(storage_path('app/public/lap.json')));
    }

}

