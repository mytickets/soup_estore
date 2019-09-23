<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends Controller
{
    use AuthorizesRequests;

    public function getCart(Request $request) {
    	$session_id = Session::getId();
    	$cart = Cart::firstOrCreate(['session_id' => $session_id]);
    	dd($cart->products);
    	return $cart->products;
    }
}
