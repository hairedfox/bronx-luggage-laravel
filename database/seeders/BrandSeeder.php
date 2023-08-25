<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class BrandSeeder extends Seeder
{
    use HelperSeeder;

    public function run(): void
    {
        DB::beginTransaction();
        $records = [];

        $brandNames = [
            'Samsonite',
            'American Tourister',
            'Away',
            'Hartmann',
            'Calpak'
        ];

        foreach($brandNames as $brand) {
            array_push($records, [
                'name' => $brand,
            ]);
        }

        DB::table('brands')->insert($records);
        DB::commit();
    }
}
