<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\Carrier;
use App\Models\Media;

class CarriersImageSeeder extends Seeder
{
    use HelperSeeder;

    public function run(): void
    {
        DB::beginTransaction();
        $records = [];
        $faker = app(Faker::class);
        $mediaIds = Media::query()->pluck('id');
        $carriers = Carrier::query()->get();

        foreach($carriers as $carrier) {
            array_push($records, [
                'carrier_id' => $carrier->id,
                'media_id' => $faker->randomElements($mediaIds)[0],
                'type' => 'featured',
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        DB::table('carriers_images')->insert($records);
        DB::commit();
    }
}
