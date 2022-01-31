<?php

namespace App\Console\Commands;

use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DownloadNamedays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'name-days:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download/update namedays from Abalin Nameday API.';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \Exception
     */
    public function handle(): int
    {
        $year = date("Y");
        for ($month = 1; $month < 13; $month++) {
            $days = cal_days_in_month(CAL_GREGORIAN,$month,$year);
            for ($day_in_month = 1; $day_in_month <= $days; $day_in_month++){

                $response = Http::acceptJson()->post("https://nameday.abalin.net/namedays", [
                    'country' => 'sk',
                    'day' => $day_in_month,
                    'month' => $month,
                ]);

               $result =  json_decode($response, true, 512, JSON_UNESCAPED_UNICODE)['data'];
               $namedays = $result['namedays'];
               $name = $namedays['sk'];

               $date = new DateTime($year . '/' . $month . '/' . $day_in_month);
               DB::table('name_days')->upsert(
                    ['name' => $name, 'date'=> $date],
                    ['name', 'date']
               );
            }
        }

        return self::SUCCESS;
    }
}
