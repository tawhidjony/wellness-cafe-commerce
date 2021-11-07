@extends('layouts/frontend/app')

@section('content')
        @php
        $grand_total = 0 ;
        @endphp
      <div class="flex my-10 border rounded shadow-md">
        <div class="w-full px-10 py-10 bg-white">
          <div class="flex justify-between pb-8 border-b">
            <h1 class="text-2xl font-semibold">Shopping Cart</h1>
          </div>
          <div class="flex mt-10 mb-5">
            <h3 class="w-2/5 text-xs font-semibold text-gray-600 uppercase">Product Details</h3>
            <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Quantity</h3>
            <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Price</h3>
            <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Total</h3>
          </div>

                @forelse ($get_cart_item as $item)
                <div class="flex items-center px-6 py-5 -mx-8 hover:bg-gray-100">
                    <div class="flex w-2/5">
                    <div class="w-20">
                        <img class="h-24" src="{{$item->options->photo}}" alt="">
                    </div>
                    <div class="flex flex-col justify-between flex-grow ml-4">
                        <span class="text-sm font-bold">{{$item->name}}</span>
                        <form action="{{route('cart.destroy', $item->rowId)}}">
                            @csrf
                            <button type="submit" class="text-xs font-semibold text-gray-500 hover:text-red-500">Remove</button>
                        </form>
                    </div>
                    </div>

                    <div class="flex justify-center w-1/5">
                        <form action="{{route('cart.update')}}" method="POST">
                            @method('PUT')
                            @csrf
                            <input class="w-10 p-2 mx-2 text-center border" type="text" name="qty" value="{{$item->qty}}">
                            <input type="submit" value="Update" class="px-4 py-2 border cursor-pointer">
                            <input type="hidden" name="rowId" value="{{$item->rowId}}">
                        </form>
                    </div>
                    <span class="w-1/5 text-sm font-semibold text-center">RM {{$item->price}}</span>
                    <span class="w-1/5 text-sm font-semibold text-center">RM {{$item->subtotal}}</span>
                </div>
                <input type="hidden" name="subtotal" value="{{ $grand_total += $item->subtotal}}">
                @empty
                    <div class="my-20">
                        <h1 class="my-20 text-center">Item Not Available</h1>
                    </div>
                @endforelse

                <form action="{{route('payment.store')}}" method="POST" >
                    @csrf
                    <div class="flex items-center justify-between border-t">
                        <h2 class="mt-8">Grand Total</h2>
                        <h2 class="mt-8">RM {{$grand_total}}</h2>
                    </div>
                    <input type="hidden" name="shipping_id" value="{{$shippingId}}" >
                    <div class="mt-8 flex">
                        <div class="flex-1">
                            <label for="" class=" border bg-gray-50 p-2 rounded">
                                <input type="radio" name="cash_on_delevery" value="cash_on_delevery" class="mr-3">
                                Cash on Delevery
                            </label>
                        </div>
                        <div class="flex-1">
                            <button type="submit" class="w-48 h-12 text-xs font-medium text-white bg-blue-500 rounded">Continue to Shipping</button>
                        </div>
                    </div>

                </form>
        </div>

      </div>


@endsection



