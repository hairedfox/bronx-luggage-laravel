<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    use HelperSeeder;

    public function run(): void
    {
        DB::beginTransaction();
        $records = [];

        $categoryNames = [
            'Carry-On Luggage',
            'Suitcases',
            'Garment Bags',
            'Luggage Sets',
            'For Kid'
        ];

        foreach($categoryNames as $cat) {
            array_push($records, [
                'name' => $cat,
            ]);
        }

        DB::table('categories')->insert($records);
        DB::commit();
    }
}
