@extends('layouts.frontend.app')

@section('content')

<section>
    <div class="w-full p-2 mt-8 uppercase border-b rounded bg-blue-50">
        <h2>Category Products</h2>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($productList as $item)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <div class="flex items-end justify-end w-full h-56 bg-cover" style="background-image: url('{{$item->photo}}')">
                    <form action="{{route('add.cart')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="p-2 mx-5 -mb-4 text-white bg-blue-600 rounded-full hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </form>
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase"><a href="{{route('product.details', $uuid = ['uuid' => $item->uuid ])}}">{{$item->title}}</a></h3>
                    <span class="mt-2 text-gray-500">RM {{$item->price}}</span>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
