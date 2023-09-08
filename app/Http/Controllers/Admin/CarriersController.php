<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Repositories\CarrierRepository;
use App\Repositories\BrandRepository;
use Illuminate\Support\Facades\Validator;

class CarriersController extends BaseController
{
  protected CarrierRepository $carrierRepository;
  protected BrandRepository $brandRepository;

  public function __construct(CarrierRepository $carrierRepository, BrandRepository $brandRepository)
  {
    $this->carrierRepository = $carrierRepository;
    $this->brandRepository = $brandRepository;
  }

  public function index(Request $request)
  {
    if (Auth::check()) {
      $paginator = $this->carrierRepository->list($request->all());

      return view('admin.carriers.index', [
        'carriers' => $paginator->items(),
        'paginator' => $paginator
      ]);
    } else {
      return redirect()->intended('/admin/login')->with('alert-danger', 'Permission denied. Login first');
    }
  }

  public function new()
  {
    $brands = $this->brandRepository->dropdown();
    return view('admin.carriers.new', [
      'brands' => $brands
    ]);
  }

  public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|min:6',
      'description' => 'required|string|min:10|max:255',
      'type' => 'required|string|in:bags,backpacks,luggage',
      'gender' => 'required|string|in:male,female,unisex',
      'brand_id' => 'required|integer',
      'price' => 'required|decimal:0,2',
      'release_year' => 'required|integer|min:1995|max:'.date('Y'),
      'featured' => 'boolean|nullable'
    ]);

    if ($validator->fails())
    {
      $brands = $this->brandRepository->dropdown();
      return view('admin.carriers.new', [
        'brands' => $brands,
        'errors' => $validator->errors()
      ]);
    }

    $this->carrierRepository->create($validator->validated());

    return redirect()->intended('/admin/carriers')->with('alert-success', 'Added carrier successfully!');
  }
}
