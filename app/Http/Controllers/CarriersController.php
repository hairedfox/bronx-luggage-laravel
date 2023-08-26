<?php

namespace App\Http\Controllers;

use App\Repositories\CarrierRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Carrier;

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
      // carriers list -- done
      // filter by attributes (type, weight, color)
      // sorting: price, averating rating, name alphabetically
      // pagination: limit: 10 per page -- done
        // filter: category_id_eq
            //     type_eq
            //     price_max_eq
            //     price_min_eq
            //     name_cont

      $params = $request->all();
      $paginator = $this->carrierRepository->list($params);

      return view('carriers.index', [
          'carriers' => $paginator->items(),
          'categories' => $this->categoryRepository->listNoPagination(),
          'carrier_types' => Carrier::TYPES,
          'paginator' => [
              'page' => $paginator->currentPage(),
              'prev' => $paginator->previousPageUrl(),
              'next' => $paginator->nextPageUrl(),
              'count' => $paginator->total(),
              'per_page' => $paginator->perPage(),
              'last_page' => $paginator->lastPage(),
              'has_more_page' => $paginator->hasMorePages(),
              'first_item' => $paginator->firstItem(),
              'last_item' => $paginator->lastItem()
          ]
      ]);
    }
}
