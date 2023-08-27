<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class GuestSeeder extends Seeder
{
    use HelperSeeder;

    public function run(): void
    {
      DB::beginTransaction();
      $records = [];
      $faker = app(Faker::class);

      $brandNames = [
          'Samsonite',
          'American Tourister',
          'Away',
          'Hartmann',
          'Calpak'
      ];

      for ($i = 0; $i < 10; $i++) {
          array_push($records, [
              'first_name' => $faker->firstNameMale(),
              'last_name' => $faker->lastName(),
              'email' => $faker->email(),
              'phone_number' => $faker->phoneNumber(),
              'created_at' => $this->gen_datetime(),
              'updated_at' => $this->gen_datetime()
          ]);
      }

      DB::table('guests')->insert($records);
      DB::commit();
    }
}
