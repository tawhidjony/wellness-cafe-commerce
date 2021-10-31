@extends('layouts/frontend/app')
@section('content')
    <div class="flex items-center justify-center bg-gray-50">
        <div class="py-12">
            <div class="max-w-md mx-2 mx-auto bg-white rounded-lg shadow-lg md:max-w-xl">
                <div class="md:flex ">
                    <div class="w-full p-4 px-5 py-5">
                        <div class="flex flex-row mb-4">
                            <h2 class="text-3xl font-semibold text-center">Shipping address</h2>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-2">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="First name*">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Last name*">
                        </div>
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Email">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Phone Number*">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Address*">
                        <div class="grid md:grid-cols-3 md:gap-2">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Zipcode*">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="City*">
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="State*">
                        </div>
                            <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Country*">
                        <div class="flex items-center justify-between pt-2">
                            <button type="button" class="w-24 h-12 text-xs font-medium text-blue-500">Return to cart</button>
                            <button type="button" class="w-48 h-12 text-xs font-medium text-white bg-blue-500 rounded">Continue to Shipping</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
