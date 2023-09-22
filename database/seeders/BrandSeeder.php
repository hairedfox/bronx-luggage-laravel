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
            'Hartmann'
        ];

        foreach($brandNames as $brand) {
            array_push($records, [
                'name' => $brand,
                'type' => 'luggage',
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        $brandNames = [
            'Foxy',
            'Catty',
            'Hangg',
            'Treewood'
        ];

        foreach($brandNames as $brand) {
            array_push($records, [
                'name' => $brand,
                'type' => 'backpack',
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        $brandNames = [
            'Vivid',
            'Vital',
            'Firewood',
            'X-Factor'
        ];

        foreach($brandNames as $brand) {
            array_push($records, [
                'name' => $brand,
                'type' => 'bag',
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        $brandNames = [
            'Fett',
            'Harefx',
            'Dreaming Foxy',
            'Night Walker'
        ];

        foreach($brandNames as $brand) {
            array_push($records, [
                'name' => $brand,
                'type' => 'other',
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        DB::table('brands')->insert($records);
        DB::commit();
    }
}
