<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Guest;

class OrderSeeder extends Seeder
{
  use HelperSeeder;

  public function run(): void
  {
    DB::beginTransaction();

    $orders = [];
    $guestModel = new Guest;
  }
}
