<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wellness cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-3 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-xl font-bold text-gray-800 capitalize dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300" href="{{url('/')}}">wellness cafe</a>
            </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="{{url('/')}}">Home</a>
                    <a class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="{{route('product.shop')}}">Shop</a>
                    {{-- <a class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Contact</a>
                    <a class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">About</a> --}}
                </div>

                <div class="flex justify-center md:block">
                    <a class="relative text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="{{route('cart.index')}}">
                        <i class="fas fa-shopping-cart"
                            style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla993, sans-serif;"></i>

                        <span class="absolute top-0 left-0 p-1 text-xs text-white bg-indigo-500 rounded-full "></span>
                    </a>
                </div>
                <div class="flex justify-center md:block">
                    @guest
                    <a href="{{route('shipping.login')}}" class="px-4 py-2 ml-8 text-white bg-indigo-600 rounded" >Login</a>
                    <a href="{{route('shipping.register')}}" class="px-4 py-2 ml-2 text-white bg-indigo-600 rounded" >Register</a>
                    @else
                        <form  action="{{ route('logout.perform') }}" method="POST" class="d-none">
                            @csrf
                            <button type="submit" class="px-4 py-2 ml-2 ml-8 text-white bg-indigo-600 rounded" >Logout</button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
        <footer class="bottom-0 left-0 w-full my-8 text-gray-600 bg-gray-700 body-font">
            <div class="bg-gray-900">
                <div class="container flex flex-col flex-wrap items-center px-5 py-4 mx-auto sm:flex-row">
                    <p class="text-xl text-center text-white capitalize sm:text-left">© 2021 wellness cafe
                    </p>
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <img src="{{URL::to('assets/images/logo/IMG_4496.JPG')}}" class="h-16" alt="">
                    </span>
                </div>
            </div>
        </footer>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
