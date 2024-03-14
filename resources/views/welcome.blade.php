<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <header>
        <nav class=" border-gray-200 py-2.5 bg-[#1D5D9B] fixed left-0 right-0 z-10 top-0">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="#" class="flex items-center">
                    <img src="{{asset('asset/logo.jpg')}}" class="h-6 mr-3 sm:h-9" alt=" Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CareerQuest</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <div class="hidden mt-2 mr-4 sm:inline-block">
                        <span></span>
                    </div>

                    <a href="#"
                       class="text-white bg-purple-100 hover:bg-amber-400 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-yellow-500 focus:outline-none ">Sign In</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="true">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#"
                               class="block py-2 pl-3 pr-4 text-white hover:text-yellow-300  rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                               aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 pl-3 pr-4 text-white  border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0  lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Job</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-300 lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Test</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-yellow-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-300 lg:p-0 dark:text-gray-100 lg:dark:hover:text-yellow-300 dark:hover:bg-yellow-300 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    </header>
        <main class="">
            <section>
                <div class="bg-gray-">
                    <div class="dark:bg-transparent">
                        <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
                            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                                <h1
                                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-black  font-black leading-10">
                                    Let's not stress for
                                    <span class="text-blue-600 dark:text-[#1D5D9B]">Website</span>
                                    designs.
                                </h1>
                                <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-600 dark:text-gray-300 font-normal text-center text-xl">
                                    A Community build tailwind component library.
                                </p>
                            </div>
                            <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                                <div class="flex rounded-md w-full">
                                    <input type="text" name="q"
                                           class="w-full p-3 rounded-md rounded-r-none border-2 border-gray-500 placeholder-current  dark:text-gray-300  "
                                           placeholder="Find jobs and internships" />
                                    <button
                                        class="inline-flex items-center gap-2 bg-[#1D5D9B] text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                                        <span>Find</span>
                                        <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                             viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                             xml:space="preserve">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-4/6 mx-auto mb-5">
                    <img src="https://cdn01.alison-static.net/public/html/site/img/homepage/banner-image.svg">
                </div>
            </section>
            <section>
                <div class="bg-[#BCE1FB] px-2 py-10">

                    <div id="features" class="mx-auto max-w-6xl">
                        <p class="text-center text-base font-semibold leading-7 text-primary-500">Features</p>
                        <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                            Category Career
                        </h2>
                        <ul class="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
                            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

                                <img src="https://www.svgrepo.com/show/530438/ddos-protection.svg" alt="" class="mx-auto h-10 w-10">
                                <h3 class="my-3 font-display font-medium">Information Technology</h3>
                                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                                    the cutting-edge language model that makes interactions a breeze. With its user-friendly interface,
                                    effortlessly tap into the world of AI-generated text.
                                </p>

                            </li>
                            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

                                <img src="https://www.svgrepo.com/show/530442/port-detection.svg"
                                     alt="" class="mx-auto h-10 w-10">
                                <h3 class="my-3 font-display font-medium">Easy to use</h3>
                                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                                    Simply input your subject, click the generate button, and the result will appear in seconds just like
                                    magick.
                                </p>

                            </li>
                            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                                <img src="https://www.svgrepo.com/show/530179/stock-movement.svg" alt="" class="mx-auto h-10 w-10">
                                <h3 class="my-3 font-display font-medium">Business</h3>
                                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                                    We offer advanced customization. You can freely combine options like roles, languages, publish, tones,
                                    lengths,
                                    and formats.
                                </p>

                            </li>
                            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                                <a href="/pricing" class="group">
                                    <img src="https://www.svgrepo.com/show/530440/machine-vision.svg" alt="" class="mx-auto h-10 w-10">
                                    <h3 class="my-3 font-display font-medium group-hover:text-primary-500">Information Technology</h3>
                                    <p class="mt-1.5 text-sm leading-6 text-secondary-500">We offer a free trial service without login. We
                                        provide
                                        many payment options including pay-as-you-go and subscription.</p>
                                </a>
                            </li>
                            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                                <a href="/templates" class="group">
                                    <img src="https://www.svgrepo.com/show/530450/page-analysis.svg" alt="" class="mx-auto h-10 w-10">
                                    <h3 class="my-3 font-display font-medium group-hover:text-primary-500">
                                        Digital Marketing
                                    </h3>
                                    <p class="mt-1.5 text-sm leading-6 text-secondary-500">We offer many templates covering areas such as
                                        writing,
                                        education, lifestyle and creativity to inspire your potential. </p>
                                </a>
                            </li>
                            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                                <a href="/download" class="group">
                                    <img src="https://www.svgrepo.com/show/530453/mail-reception.svg" alt="" class="mx-auto h-10 w-10">
                                    <h3 class="my-3 font-display font-medium group-hover:text-primary-500">Use Anywhere</h3>
                                    <p class="mt-1.5 text-sm leading-6 text-secondary-500">Our product is compatible with multiple platforms
                                        including Web, Chrome, Windows and Mac, you can use MagickPen anywhere.</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
            </section>
            <section>
                <div class="pt-12 bg-gray-50 sm:pt-16">
                    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto text-center">
                            <h2 class="text-3xl font-extrabold leading-9 text-gray-900 sm:text-4xl sm:leading-10">
                                Trusted by developers
                            </h2>
                            <p class="mt-3 text-xl leading-7 text-gray-600 sm:mt-4">
                                This package powers many production applications on many different hosting platforms.
                            </p>
                        </div>
                    </div>
                    <div class="pb-12 mt-10 bg-gray-50 sm:pb-16">
                        <div class="relative">
                            <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                            <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                                <div class="max-w-4xl mx-auto">
                                    <dl class="bg-white rounded-lg shadow-lg sm:grid sm:grid-cols-3">
                                        <div class="flex flex-col p-6 text-center border-b border-gray-100 sm:border-0 sm:border-r">
                                            <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500" id="item-1">
                                                Stars on GitHub
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600" aria-describedby="item-1">
                                                4670+
                                            </dd>
                                        </div>
                                        <div
                                            class="flex flex-col p-6 text-center border-t border-b border-gray-100 sm:border-0 sm:border-l sm:border-r">
                                            <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                                Downloads
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600">
                                                80k+
                                            </dd>
                                        </div>
                                        <div class="flex flex-col p-6 text-center border-t border-gray-100 sm:border-0 sm:border-l">
                                            <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                                Sponsors
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600">
                                                100+
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-5 mb-24">
                <div id="default-carousel" class="relative z-0 w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-facebook-cover_23-2149418949.jpg?t=st=1710311296~exp=1710314896~hmac=47cd9d658b34cede0ba73190e112153de21f5900e85b59dd9e914e0c48f6b527&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149418948.jpg?t=st=1710311358~exp=1710314958~hmac=64f81d30afd1a9273dff4e98e43d62b3c5c164e35d4c4a30d7d6bd6048aa8964&w=1380" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
                    </button>
                </div>

            </section>
        </main>
<footer>
    <div class="bg-[#1D5D9B]">
        <div class="max-w-screen-lg px-4 sm:px-6 text-white sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto">
            <div class="p-5">
                <h3 class="font-bold text-xl text-white text-center">Company Name</h3>
                <div class="justify-center md:flex-auto md:flex-row-reverse mt-5 flex-row flex">
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                             viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                             style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                  5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                  -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                  0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                  -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                  0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                  -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                  0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                  -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                  -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                  1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                  -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                  6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                  0.771,-0.67 1.054,-1.093Z"></path>
                </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                             viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                             style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                  5.373,-12 12,-12c6.627,0 12,5.373
                  12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                  0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                  -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                             viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                             style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <g id="Layer_1">
                        <circle id="Oval" cx="12" cy="12" r="12"></circle>
                        <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                     -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                     -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                     -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                     -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                     0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                     2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                     1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                     0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                     -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                     -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                     -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                     0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                     0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                    </g>
                </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                             viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                             style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                  3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                  -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                  -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                  -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                  0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                  3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                  -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                  -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                  1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                  -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                  -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                  0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                  0.4,1.5l0,4.5l2.9,0Z"></path>
                </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                             viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                             style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Combined-Shape" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                  -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                  -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                  0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                  0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                  -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"></path>
                </svg>
                    </a>
                </div>
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-white font-bold">Resources</div>
                <a class="my-3 block" href="/#">Documentation <span class="text-teal-600 text-xs p-1"></span></a><a
                    class="my-3 block" href="/#">Tutorials <span class="text-teal-600 text-xs p-1"></span></a><a
                    class="my-3 block" href="/#">Support <span class="text-teal-600 text-xs p-1">New</span></a>
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-white font-bold">Support</div>
                <a class="my-3 block" href="/#">Help Center <span class="text-teal-600 text-xs p-1"></span></a><a
                    class="my-3 block" href="/#">Privacy Policy <span class="text-teal-600 text-xs p-1"></span></a><a
                    class="my-3 block" href="/#">Conditions <span class="text-teal-600 text-xs p-1"></span></a>
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-white font-bold">Contact us</div>
                <a class="my-3 block" href="/#">XXX XXXX, Floor 4 San Francisco, CA
                    <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">contact@company.com
                    <span class="text-teal-600 text-xs p-1"></span></a>
            </div>
        </div>
    </div>

    <div class="pt-2">
        <div class="flex px-3 m-auto  border-t text-gray-800 text-sm flex-col
      max-w-screen-lg items-center">
            <div class="my-5">© Copyright 2020. All Rights Reserved.</div>
        </div>
    </div>
</footer>
    </body>
</html>
