@extends('layouts.frontend.app')

@section('content')

    <div class="relative flex items-center min-h-screen p-5 overflow-hidden min-w-screen lg:p-10">
        <div class="relative w-full max-w-6xl p-10 mx-auto text-gray-800 bg-white border rounded shadow lg:p-20 md:text-left">
            <div class="items-center -mx-10 md:flex">
                <div class="w-full px-10 mb-10 md:w-1/2 md:mb-0">
                    <div class="relative">
                        <img src="{{asset($singleProduct->photo)}}" class="relative z-10 w-full"
                            alt="">
                        <div class="absolute z-0 border-4 border-yellow-200 top-10 bottom-10 left-10 right-10"></div>
                    </div>
                </div>
                <div class="w-full px-10 md:w-1/2">
                    <div class="mb-10">
                        <h1 class="mb-5 text-2xl font-bold uppercase">{{ $singleProduct->title }}</h1>
                        <p class="text-sm">{{$singleProduct->product_details}}
                            {{-- <a href="#"
                                class="inline-block text-xs leading-none text-gray-900 border-b border-gray-900 opacity-50 hover:opacity-100">MORE
                                <i class="mdi mdi-arrow-right"></i>
                            </a> --}}
                        </p>
                    </div>
                    <div>
                        <form action="{{route('add.cart')}}" method="POST" >
                            @csrf
                            <input type="hidden" name="id" value="{{$singleProduct->id}}">
                            <input type="hidden" name="quantity" value="1">
                            <div class="inline-block mr-5 align-bottom">
                                <span class="text-2xl leading-none align-baseline">RM</span>
                                <span class="text-2xl font-bold leading-none align-baseline">{{$singleProduct->price}}</span>
                            </div>
                            <div class="inline-block align-bottom">
                                <button type="submit" class="px-10 py-2 font-semibold text-yellow-900 bg-yellow-300 rounded-full opacity-75 hover:opacity-100 hover:text-gray-900"><i
                                        class="mr-2 -ml-2 mdi mdi-cart"></i> BUY NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <div class="fixed bottom-0 right-0 z-10 flex items-end justify-end mb-4 mr-4">
        <div>
            <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank"
                class="block w-16 h-16 transition-all transform rounded-full shadow hover:shadow-lg hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg" />
            </a>
        </div>
    </div>

@endsection
