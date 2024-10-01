<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Race;

class FetchFormula1Data extends Command
{
    protected $signature = 'fetch:formula1data';
    protected $description = 'Fetch Formula 1 data from API and save it to the database';

    public function handle()
    {
        $response = Http::get('https://ergast.com/api/f1/2021.json');
        $data = $response->json();

        foreach ($data['MRData']['RaceTable']['Races'] as $race) {
            Race::updateOrCreate([
                'season' => $race['season'],
                'round' => $race['round'],
            ], [
                'raceName' => $race['raceName'],
                'circuitName' => $race['Circuit']['circuitName'],
                'date' => $race['date'],
            ]);
        }

        $this->info('Data fetched and stored successfully.');
    }
}