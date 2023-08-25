<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
  use HelperSeeder;

  public function run(): void
  {
    DB::beginTransaction();
    $faker = app(Faker::class);
    $records = [];

    for($i = 0; $i < 50; $i++)
    {
      array_push($records, [
          'first_name' => $faker->firstNameMale(),
          'last_name' => $faker->lastName(),
          'email' => $faker->email(),
          'email_verified_at' => $this->gen_datetime(),
          'password' => '$2y$10$EnjxXH02JB.24QPWmSSbEOLW7q6BFUeUrEWjESPV4k87z8wE46BI.', //1234567
          'created_at' => $this->gen_datetime(),
          'updated_at' => $this->gen_datetime()
      ]);
    }

    DB::table('users')->insert($records);
    DB::commit();
  }
}
