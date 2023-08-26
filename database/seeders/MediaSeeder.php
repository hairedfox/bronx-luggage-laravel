<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\User;

class MediaSeeder extends Seeder
{
    use HelperSeeder;

    public function run(): void
    {
        DB::beginTransaction();
        $records = [];
        $model = new User;

        $user = $model->query()->first();

        for($i = 1; $i <= 11; $i++)
        {
            $name = 'product'.$i.'.jpg';
            array_push($records, [
                'name' => $name,
                'path' => 'resources/img/product/'.$name,
                'size' => '1.0 KB',
                'type' => 'product',
                'user_id' => $user->id,
                'created_at' => $this->gen_datetime(),
                'updated_at' => $this->gen_datetime()
            ]);
        }

        for($i = 1; $i <= 5; $i++)
        {
            $name = 'productbig'.$i.'.jpg';
            array_push($records, [
                'name' => $name,
                'path' => 'resources/img/product/'.$name,
                'size' => '1.0 KB',
                'type' => 'product',
                'user_id' => $user->id
            ]);
        }

        DB::table('media')->insert($records);
        DB::commit();
    }
}
