<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\Brand;

class CarrierSeeder extends Seeder
{
    use HelperSeeder;

    public function run(): void
    {
        DB::beginTransaction();
        $faker = app(Faker::class);
        $records = [];
        $brandModel = new Brand;
        $brandIds = $brandModel->pluck('id')->toArray();

        for($i = 0; $i < 50; $i++)
        {
            array_push($records, [
                'name' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'gender' => $faker->randomElements(['male', 'female'])[0],
                'type' => $faker->randomElements(['bag', 'luggage', 'backpack'])[0],
                'brand_id' => $faker->randomElements($brandIds)[0],
                'price' => $faker->numberBetween(100, 2000),
                'release_year' => $faker->numberBetween(1995, 2023),
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        DB::table('carriers')->insert($records);
        DB::commit();
    }
}
