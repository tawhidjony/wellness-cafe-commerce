<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CartController extends Controller
{
    public function cartIndex(){
        $get_cart_item = Cart::content();
        return view('frontend.cart.index', compact('get_cart_item'));
    }

    public function addItemToCart(Request $request){
        $product = Product::find($request->id);
        $addCart = Cart::add([
                    'id'        =>  $request->id,
                    'name'      =>  $product->title,
                    'price'     =>  $product->price,
                    'qty'       =>  $request->quantity,
                    'weight'    =>  '0',
                    'options'   =>  [ 'photo' => $product->photo ]

        ]);

        if($addCart){
            return redirect()->route('cart.index');
        }else{
            return view('/');
        }
    }

    public function cartUpdate(Request $request){
        Cart::update($request->rowId, $request->qty);
        return redirect()->back();
    }

    public function cartDestroy($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }

}
