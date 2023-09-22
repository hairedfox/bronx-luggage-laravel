<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SuggestionRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SuggestionsController extends BaseController
{
  protected $suggestionRepository;
  public function __construct(SuggestionRepository $suggestionRepository) {
    $this->suggestionRepository = $suggestionRepository;
  }
  public function index(Request $request) {
    $input = $request->all();
    $paginator = $this->suggestionRepository->list($input);

    return view('admin.suggestions.index', [
      'suggestions' => $paginator->items(),
      'paginator' => $paginator
    ]);
  }
}
