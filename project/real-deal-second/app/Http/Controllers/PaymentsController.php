<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function create(){
      return view('/payments/create');
    }
    public function store(){
      ProductPurchased::dispatch('toy');
      // Usaremos luego de hacer la leccion 12 request()->user()->notify(new PaymentReceived());
      //Notification::send(request()->user(), new PaymentReceived());
    }
}
