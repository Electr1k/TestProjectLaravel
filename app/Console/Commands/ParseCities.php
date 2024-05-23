<?php

namespace App\Console\Commands;

use App\Services\CityParser;
use Illuminate\Console\Command;

class ParseCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse cities to DB';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $parser = new CityParser();
        $parser->parseCities();
    }
}
