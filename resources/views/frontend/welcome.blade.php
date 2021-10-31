@extends('layouts/frontend/app')

@section('content')
     {{-- slider --}}
     <div class="section">
        <div class="h-full mt-8 rounded">
            <div id="slider-1">
                <div class="object-fill h-auto px-10 py-24 text-white bg-center bg-cover"
                    style="background-image: url('{{URL::to('images/xB1Z0YyqnVUgFSBu9TB1ZexURAqS3KpEZPkiqKCf.jpg')}}'')">
                    <div class="md:w-1/2">
                        <p class="text-sm font-bold uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="mb-10 text-2xl leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#"
                            class="px-8 py-4 text-xs font-bold text-white uppercase bg-purple-800 rounded hover:bg-gray-200 hover:text-gray-800">Contact
                            us</a>
                    </div>
                </div> <!--  -->
                <br>
            </div>

            <div id="slider-2">
                <div class="object-fill h-auto px-10 py-24 text-white bg-top bg-cover"
                    style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">

                    <p class="text-sm font-bold uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="mb-10 text-2xl leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#"
                        class="px-8 py-4 text-xs font-bold text-white uppercase bg-purple-800 rounded hover:bg-gray-200 hover:text-gray-800">Contact
                        us</a>

                </div> <!-- container -->
                <br>
            </div>
        </div>
    </div>
    {{-- slider end --}}

    <!-- category -->
    <section>
        <div class="w-full p-2 uppercase border-b rounded bg-blue-50">
            <h2>Category</h2>
        </div>
        <div  class="flex flex-wrap items-center justify-between mt-8">
            @foreach ($categoryList as $category)
                <div class="pr-4 md:w-1/4">
                    <a href="#"
                        class="flex items-center p-4 bg-blue-200 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">

                        <i class="fas fa-cubes"></i>
                        <div>
                            <p class="ml-2 text-xs font-medium ">
                               {{$category->name}}
                            </p>

                        </div>
                    </a>
                </div>
            @endforeach
{{--
            <div class="pr-4 md:w-1/4 ">
                <a href="#"
                    class="flex items-center p-4 bg-blue-200 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">

                    <i class="fas fa-cubes"></i>
                    <div>
                        <p class="ml-2 text-xs font-medium ">
                            Coffee
                        </p>

                    </div>
                </a>
            </div>
            <div class="pr-4 md:w-1/4 ">
                <a href="#"
                    class="flex items-center p-4 bg-blue-200 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">

                    <i class="fas fa-cubes"></i>
                    <div>
                        <p class="ml-2 text-xs font-medium ">
                            foods
                        </p>

                    </div>
                </a>
            </div>
            <div class="md:w-1/4 ">
                <a href="#"
                    class="flex items-center p-4 bg-blue-200 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">

                    <i class="fas fa-cubes"></i>
                    <div>
                        <p class="ml-2 text-xs font-medium ">
                            Drinks
                        </p>

                    </div>
                </a>
            </div> --}}
        </div>
    </section>

    <section>
        <div class="w-full p-2 mt-8 uppercase border-b rounded bg-blue-50">
            <h2>Latest Products</h2>
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
                        <h3 class="text-gray-700 uppercase">{{$item->title}}</h3>
                        <span class="mt-2 text-gray-500">RM {{$item->price}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
