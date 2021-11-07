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
          <input type="hidden" value="{{ $grand_total += $item->subtotal}};">
          @empty
              <div class="my-20">
                <h1 class="my-20 text-center">Item Not Available</h1>
              </div>
          @endforelse

          <div class="flex items-center justify-between border-t">
            <h2 class="mt-8">Grand Total</h2>
            <h2 class="mt-8">RM {{$grand_total}}</h2>
        </div>

          <div class="flex justify-between">
              <a href="{{url('/')}}" class="flex mt-10 text-sm font-semibold text-indigo-600">
                  <svg class="w-4 mr-2 text-indigo-600 fill-current" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                Continue Shopping</a>
                {{-- {{dd(Auth::user())}} --}}
             @if (!Auth::check())
             <a href="{{route('shipping.login')}}" class="flex mt-10 text-sm font-semibold text-indigo-600">
                <svg class="w-4 mr-2 text-indigo-600 fill-current" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
              Checkout</a>
              @else
              <a href="{{route('shipping.address')}}" class="flex mt-10 text-sm font-semibold text-indigo-600">
                <svg class="w-4 mr-2 text-indigo-600 fill-current" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
              Checkout</a>
             @endif

          </div>
        </div>

      </div>


@endsection



