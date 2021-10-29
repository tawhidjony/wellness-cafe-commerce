<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CartController extends Controller
{
    public function addItemToCart(Request $request){
        $request->dd();
    }
}
