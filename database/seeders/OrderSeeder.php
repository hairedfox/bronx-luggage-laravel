<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Guest;
use App\Models\Order;
use App\Models\Carrier;

class OrderSeeder extends Seeder
{
  use HelperSeeder;

  public function run(): void
  {
    DB::beginTransaction();

    $orders = [];
    $faker = app(Faker::class);

    $guests = Guest::all();

    foreach($guests as $guest) {
      array_push($orders, [
        'orderable_id' => $guest->id,
        'orderable_type' => Guest::class,
        'total_price' => 1000000,
        'status' => $faker->randomElements(['paid', 'processing', 'shipping', 'done'])[0],
        'created_at' => $this->gen_datetime(),
        'updated_at' => $this->gen_datetime()
      ]);
    }

    DB::table('orders')->insert($orders);
    DB::commit();

    # ----- Now Details

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
