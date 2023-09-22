<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Suggestion;

class ContactsController extends Basecontroller
{
  public function create(Request $request) {
    $input = $request->all();

    $guest = Guest::query()->where('email', $input['email'])->firstOrNew(
      [
        'email' => $input['email'],
        'phone_number' => $input['phone'],
        'first_name' => $input['first_name'],
        'last_name' => $input['last_name']
      ]
    );

    $guest->save();

    Suggestion::query()->create([
      'request' => $input['message'],
      'suggestable_id' => $guest->id,
      'suggestable_type' => Guest::class
    ]);

    return redirect()->intended('/contact-us')->with('alert-success', 'We have received your messages and will reply you as soon as possible. Thank you.');
  }
}
