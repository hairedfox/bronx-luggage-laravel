<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Guest;
use App\Models\Order;
use App\Models\Carrier;

class OrderDetailSeeder extends Seeder
{
  use HelperSeeder;

  public function run(): void
  {
    DB::beginTransaction();
    $orderDetails = [];
    $ordersList = Order::all();
    $carriers = Carrier::query()->limit(5);

    foreach($ordersList as $order) {
      foreach($carriers as $carrier) {
        array_push($orderDetails, [
          'order_id' => $order->id,
          'carrier_id' => $carrier->id,
          'price' => 50000,
          'quantity' => 4,
          'created_at' => $this->gen_datetime(),
          'updated_at' => $this->gen_datetime()
        ]);
      }
    }

    DB::table('order_details')->insert($orderDetails);
    DB::commit();
  }
}
