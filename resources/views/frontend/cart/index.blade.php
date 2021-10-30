@extends('layouts/frontend/app')

@section('content')

      <div class="flex my-10 shadow-md">
        <div class="w-3/4 px-10 py-10 bg-white">
          <div class="flex justify-between pb-8 border-b">
            <h1 class="text-2xl font-semibold">Shopping Cart</h1>
            <h2 class="text-2xl font-semibold">3 Items</h2>
          </div>
          <div class="flex mt-10 mb-5">
            <h3 class="w-2/5 text-xs font-semibold text-gray-600 uppercase">Product Details</h3>
            <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Quantity</h3>
            <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Price</h3>
            <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Total</h3>
          </div>
          <div class="flex items-center px-6 py-5 -mx-8 hover:bg-gray-100">
            <div class="flex w-2/5"> <!-- product -->
              <div class="w-20">
                <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
              </div>
              <div class="flex flex-col justify-between flex-grow ml-4">
                <span class="text-sm font-bold">Iphone 6S</span>
                <span class="text-xs text-red-500">Apple</span>
                <a href="#" class="text-xs font-semibold text-gray-500 hover:text-red-500">Remove</a>
              </div>
            </div>
            <div class="flex justify-center w-1/5">
              <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>

              <input class="w-8 mx-2 text-center border" type="text" value="1">

              <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>
            </div>
            <span class="w-1/5 text-sm font-semibold text-center">$400.00</span>
            <span class="w-1/5 text-sm font-semibold text-center">$400.00</span>
          </div>

          <div class="flex items-center px-6 py-5 -mx-8 hover:bg-gray-100">
            <div class="flex w-2/5"> <!-- product -->
              <div class="w-20">
                <img class="h-24" src="https://drive.google.com/uc?id=10ht6a9IR3K2i1j0rHofp9-Oubl1Chraw" alt="">
              </div>
              <div class="flex flex-col justify-between flex-grow ml-4">
                <span class="text-sm font-bold">Xiaomi Mi 20000mAh</span>
                <span class="text-xs text-red-500">Xiaomi</span>
                <a href="#" class="text-xs font-semibold text-gray-500 hover:text-red-500">Remove</a>
              </div>
            </div>
            <div class="flex justify-center w-1/5">
              <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>

              <input class="w-8 mx-2 text-center border" type="text" value="1">

              <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>
            </div>
            <span class="w-1/5 text-sm font-semibold text-center">$40.00</span>
            <span class="w-1/5 text-sm font-semibold text-center">$40.00</span>
          </div>

          <div class="flex items-center px-6 py-5 -mx-8 hover:bg-gray-100">
            <div class="flex w-2/5"> <!-- product -->
              <div class="w-20">
                <img class="h-24" src="https://drive.google.com/uc?id=1vXhvO9HoljNolvAXLwtw_qX3WNZ0m75v" alt="">
              </div>
              <div class="flex flex-col justify-between flex-grow ml-4">
                <span class="text-sm font-bold">Airpods</span>
                <span class="text-xs text-red-500">Apple</span>
                <a href="#" class="text-xs font-semibold text-gray-500 hover:text-red-500">Remove</a>
              </div>
            </div>
            <div class="flex justify-center w-1/5">
              <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>
              <input class="w-8 mx-2 text-center border" type="text" value="1">

              <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
              </svg>
            </div>
            <span class="w-1/5 text-sm font-semibold text-center">$150.00</span>
            <span class="w-1/5 text-sm font-semibold text-center">$150.00</span>
          </div>

          <a href="#" class="flex mt-10 text-sm font-semibold text-indigo-600">

            <svg class="w-4 mr-2 text-indigo-600 fill-current" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
            Continue Shopping
          </a>
        </div>

        <div id="summary" class="w-1/4 px-8 py-10">
          <h1 class="pb-8 text-2xl font-semibold border-b">Order Summary</h1>
          <div class="flex justify-between mt-10 mb-5">
            <span class="text-sm font-semibold uppercase">Items 3</span>
            <span class="text-sm font-semibold">590$</span>
          </div>
          <div>
            <label class="inline-block mb-3 text-sm font-medium uppercase">Shipping</label>
            <select class="block w-full p-2 text-sm text-gray-600">
              <option>Standard shipping - $10.00</option>
            </select>
          </div>
          <div class="py-10">
            <label for="promo" class="inline-block mb-3 text-sm font-semibold uppercase">Promo Code</label>
            <input type="text" id="promo" placeholder="Enter your code" class="w-full p-2 text-sm">
          </div>
          <button class="px-5 py-2 text-sm text-white uppercase bg-red-500 hover:bg-red-600">Apply</button>
          <div class="mt-8 border-t">
            <div class="flex justify-between py-6 text-sm font-semibold uppercase">
              <span>Total cost</span>
              <span>$600</span>
            </div>
            <button class="w-full py-3 text-sm font-semibold text-white uppercase bg-indigo-500 hover:bg-indigo-600">Checkout</button>
          </div>
        </div>

      </div>


@endsection



