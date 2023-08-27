<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
          'password' => Hash::make('12345678'),
          'created_at' => $this->gen_datetime(),
          'updated_at' => $this->gen_datetime(),
          'role' => $faker->randomElements(['user', 'admin'])[0]
      ]);
    }

    if (User::where('email', 'admin@example.com')->first() == null) {
      array_push($records, [
        'first_name' => $faker->firstNameMale(),
        'last_name' => $faker->lastName(),
        'email' => 'admin@example.com',
        'email_verified_at' => $this->gen_datetime(),
        'password' => Hash::make('12345678'),
        'created_at' => $this->gen_datetime(),
        'updated_at' => $this->gen_datetime(),
        'role' => 'admin'
      ]);
    }

    DB::table('users')->insert($records);
    DB::commit();
  }
}
