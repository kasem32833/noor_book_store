<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- daisy ui -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css" rel="stylesheet" type="text/css" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <!-- navbar -->
        <nav class="py-3 shadow-lg ">
            <div class="container mx-auto">
                <div class="navbar bg-base-100 ">
                    <!-- logo -->
                    <div class="flex-1">
                        <div class="flex gap-6 justify-center items-center">
                            <div class="bg-indigo-500 w-16 h-16 flex justify-center items-center rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="white" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <div class="">
                                <h3 class="text-xl font-bold">Bookie</h3>
                                <p class="text-sm text-gray-300">Book Store Website </p>
                            </div>
                            
                              
                        </div>
                    </div>
                    <!-- search and login -->
                    <div class="flex-none gap-3">
                      <div class="form-control">
                        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                      </div>
                      <div class=" flex gap-3">
                        <button class="px-6 py-3 rounded-md bg-indigo-100 drop-shadow-md">Login</button>
                        <button class="px-6 py-3 rounded-md bg-indigo-500 drop-shadow-md text-white">Sign Up</button>
                      </div>
                    
                    </div>
                  </div>
            </div>
        </nav>
        <hr>
        {{ $slot }}
        <!-- add footer section -->
        <footer>
            <div class="container mx-auto flex gap-20 my-28">
                <!-- logo and socila -->
                <div class="w-1/4 ">
                    <div class="flex gap-3  items-center">
                        <div class="bg-indigo-500 w-16 h-16 flex justify-center items-center rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="white" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class="text-xl font-bold">Bookie</h3>
                            <p class="text-sm text-gray-300">Book Store Website </p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis rerum ratione quos minima natus rem, obcaecati nemo quibusdam cum veritatis dignissimos accusamus, modi placeat assumenda. Nobis accusamus molestias ducimus necessitatibus?</p>
                    <h5 class="text-lg font-bold">follow Us</h5>
                    <ul class="flex gap-6">
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- Book category list -->
                <div class="w-1/4">
                    <h5 class="font-bold mb-5">Book Category</h5>
                    <div class="flex gap-20">
                        <ul>
                            <li><a href="">Action</a></li>
                            <li><a href="">Adventure</a></li>
                            <li><a href="">Comedy</a></li>
                            <li><a href="">Crime</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Fanasy</a></li>
                            <li><a href="">Horror</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Law </a></li>
                            <li><a href="">Mastery</a></li>
                            <li><a href="">Professional</a></li>
                            <li><a href="">Romance</a></li>
                            <li><a href="">Tv series</a></li>
                            <button class="text-indigo-500">Show More <i class="fa-solid fa-chevron-right"></i></button>
                        </ul>
                    </div>
                </div>
                <!-- Quick links -->
                <div class="w-1/4">
                    <h5 class="font-bold mb-5">Quick Links</h5>
                    <div class="flex gap-20">
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Product</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Sign Up</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Shipment</a></li>
                        </ul>
                    </div>
                </div>
                <!-- our location -->
                <div class="w-1/4">
                    <h5 class="font-bold mb-5">Our store</h5>
                    <div class="flex gap-20">
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Product</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Sign Up</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Shipment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- copyright section -->
            <hr>
            <div class="container mx-auto flex justify-between py-10">
                <p class="text-sm text-gray-800">Bookoe Book Store Website- &copy;2023 All Right Reserved</p>
                <p class="text-sm text-gray-800">Designed by Md Abul Kasem</p>
            </div>
        </footer>
    </body>
</html>
