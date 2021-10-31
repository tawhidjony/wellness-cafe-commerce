<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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


    // shipping Addresss

    public function sippingAddress(){
        return view('frontend.cart.shipping-address');
    }
    public function sippingLogin(){
        return view('frontend.auth.shipping-login');
    }
    public function sippingRegister(){
        return view('frontend.auth.shipping-register');
    }

    // public function sippingRegisterPost(Request $request){
    //   dd( $request->all());
    //   $user = User::create(request(['name', 'email', 'password']));

    //   auth()->login($user);
    // }
    public function sippingRegisterPost(Request $request)
    {
        $data = $request->all();
        $check = $this->create($data);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')->withSuccess('Signed in');
        }
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'status' => 1,
        'isRole' => 1,
        'password' => Hash::make($data['password'])
      ]);
    }

}
