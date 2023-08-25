<?php

namespace App\Http\Controllers;

use App\Repositories\CarrierRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class CarriersController extends BaseController
{
    use ValidatesRequests;

    protected CarrierRepository $carrierRepository;
    protected CategoryRepository $categoryRepository;

    public function __construct(CarrierRepository $carrierRepository, CategoryRepository $categoryRepository)
    {
      $this->carrierRepository = $carrierRepository;
      $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request) {
      // carriers list
      // filter by attributes (type, weight, color)
      // sorting: price, averating rating, name alphabetically
      // pagination: limit: 10 per page
      $params = $request->all();
      $carriers = $this->carrierRepository->list($params);
      $categories = $this->categoryRepository->listNoPagination();

      return view('carriers.index', [
          'carriers' => $carriers,
          'categories' => $categories
      ]);
    }
}
