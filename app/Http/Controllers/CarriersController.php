<?php

namespace App\Http\Controllers;

use App\Repositories\CarrierRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class CarriersController extends BaseController
{
    use ValidatesRequests;

    protected CarrierRepository $carrierRepository;

    public function __construct(CarrierRepository $carrierRepository)
    {
      $this->carrierRepository = $carrierRepository;
    }

    public function index(Request $request) {
      // carriers list
      // filter by attributes (type, weight, color)
      // sorting: price, averating rating, name alphabetically
      // pagination: limit: 10 per page
      $params = $request->all();
      $carriers = $this->carrierRepository->list($params);

      return view('carriers.index', ['carriers' => $carriers]);
    }
}
