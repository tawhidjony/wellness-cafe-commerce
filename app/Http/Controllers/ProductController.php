<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productList = Product::all();
        return view('backend.products.index', compact('productList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addProduct = New Product();
        return view('backend.products.create', compact('addProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title'     => 'required',
        //     'photo'     => 'required',
        //     'price'     => 'required',
        //     'quantity'  => 'required'
        // ]);



           $data = $request->all();
           $filePath = $this->StoreFile($request->file('photo'), 'images/products');
           if ($filePath) {
               $data['photo'] = $filePath;
           }else{
               $data['photo'] ='';
           }
           $data['uuid'] = Str::uuid();
           $storeProduct = Product::create($data);

           if($storeProduct){
            return redirect()->route('product.index')->with('hello');
           }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }



}
