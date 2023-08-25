<?php

namespace Database\Seeders;

use Carbon\Carbon;

trait HelperSeeder
{
    public function gen_datetime()
    {
        return Carbon::now();
    }

    public function gen_random_datetime()
    {
        // Define the range for the random datetime
        $startDate = Carbon::parse('2020-01-01');
        $endDate = Carbon::parse('2023-12-31');

        // Generate a random timestamp between the start and end dates
        $randomTimestamp = mt_rand($startDate->timestamp, $endDate->timestamp);

        // Convert the timestamp back to a Carbon instance
        $randomDatetime = Carbon::createFromTimestamp($randomTimestamp);
        return $randomDatetime;
    }
}
