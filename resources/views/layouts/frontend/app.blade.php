<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="
            container
            px-6
            py-3
            mx-auto
            md:flex md:justify-between md:items-center
          ">
            <div class="flex items-center justify-between">
                <div>
                    <a class="
                  text-xl
                  font-bold
                  text-gray-800
                  dark:text-white
                  md:text-2xl
                  hover:text-gray-700
                  dark:hover:text-gray-300
                " href="#">Brand</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="
                  text-gray-500
                  dark:text-gray-200
                  hover:text-gray-600
                  dark:hover:text-gray-400
                  focus:outline-none focus:text-gray-600
                  dark:focus:text-gray-400
                " aria-label="toggle menu">
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
                    <a class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                " href="#">Home</a>
                    <a class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                " href="#">Shop</a>
                    <a class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                " href="#">Contact</a>
                    <a class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                " href="#">About</a>
                </div>

                <div class="flex justify-center md:block">
                    <a class="
                  relative
                  text-gray-700
                  dark:text-gray-200
                  hover:text-gray-600
                  dark:hover:text-gray-300
                " href="#">
                        <i class="fas fa-shopping-cart"
                            style="font-family: &quot;Font Awesome 5 Free&quot;, Bangla993, sans-serif;"></i>

                        <span class="
                    absolute
                    top-0
                    left-0
                    p-1
                    text-xs text-white
                    bg-indigo-500
                    rounded-full
                  "></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
        <footer class="text-gray-600 body-font bg-gray-700 mt-8">
            <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white p-2 bg-red-700 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <span class="ml-3 text-xl text-white">DEV</span>
                </a>
                <p class="mt-2 text-sm text-white">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                    <li>
                    <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                    <li>
                    <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                    <li>
                    <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-bold text-white tracking-widest text-md mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                    <li>
                    <a class="text-white hover:text-red-300" href="#">First Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Second Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Third Link</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-red-300" href="#">Fourth Link</a>
                    </li>
                </nav>
                </div>
            </div>
            </div>
            <div class="bg-gray-900">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-white text-sm text-center sm:text-left">© 2020 Dev —
                <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-400 ml-1" target="_blank">@Developer</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a class="text-gray-200">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-200">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-200">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-200">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
                </span>
            </div>
            </div>
        </footer>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
