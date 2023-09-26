<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }
    public function storeVal(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc',
            'value' => 'required|numeric|between:2.50,99.90',
            'password' => ['required',Password::min(8)->mixedCase()->numbers()],
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
        ]);

        $request->image->storeAs('images', $request->image->getClientOriginalName(), 'public');

        $results = [
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'value' => $request->value,
            'image' => $request->image->getClientOriginalName(),
        ];

        return redirect('/result')->with(['results' => $results, 'status' => 'Submitted !']);
    }

    public function result()
    {
      $results = session()->get('results');
  
      return view('result', ['results' => $results]);
    }
}