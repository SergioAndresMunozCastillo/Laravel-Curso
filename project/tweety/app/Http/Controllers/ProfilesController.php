<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Vendor\Doctrine\Inflector\Rules\English\Rule;
class ProfilesController extends Controller
{
    public function show(User $user){
      return view('profiles.show', compact('user'));
    }

    public function edit(User $user){
      return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
       $attributes = request()->validate([
        'username' => [
          'string',
          'required',
          'max:255',
          'alpha_dash',
        ],
        'name' => ['string', 'required', 'max:255'],
        'email' => ['string', 'required', 'email' , 'max:255',],
        'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
      ]);

      $user->update($attributes);

      return redirect('/profiles/Giovanna');
    }
}
