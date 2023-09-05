<?php

namespace App\Http\Controllers;

use App\Repositories\CarrierRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StaticPagesController extends Controller
{
    use ValidatesRequests;

    protected $carrierRepository;

    public function __construct(CarrierRepository $carrierRepository)
    {
      $this->carrierRepository = $carrierRepository;
    }

    public function homepage() {
      $featuredProducts = $this->carrierRepository->featuredProducts();
      return view('static_pages.homepage', [
          'featuredProducts' => $featuredProducts
        ]
      );
    }

    public function contact_us() {
      return view('static_pages.contact_us');
    }
}
