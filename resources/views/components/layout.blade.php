<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medieval Medical</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

{{--Top Green Head Bar--}}
<section class="bg-green-600 py-2 tophead">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row justify-center lg:justify-between gap-3">
            <ul class="flex flex-col lg:flex-row justify-center lg:justify-start items-center gap-3 text-white text-center lg:text-left text-sm lg:text-base">
                <li>Phone:
                    <a href="tel:916394342182" class="text-white">+91-6394342182</a>,
                    <a href="tel:0522-4001543" class="text-white">0522-4001543</a>
                </li>
                <li>Email:
                    <a href="mailto:medievalmedicalindia21@gmail.com" class="text-white">medievalmedicalindia21@gmail.com</a>
                </li>
            </ul>

            <div class="flex space-x-4">
                <!-- Facebook -->
                <a href="#" target="_blank" class="text-white hover:text-blue-800 transition-colors">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <!-- Twitter -->
                <a href="#" target="_blank" class="text-white hover:text-blue-600 transition-colors">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <!-- Youtube -->
                <a href="#" target="_blank" class="text-white hover:text-red-500 transition-colors">
                    <i class="fab fa-youtube fa-2x"></i>
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/medieval-medical-india-private-limited/" target="_blank" class="text-white hover:text-blue-900 transition-colors">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<div class="min-h-full">
    <nav class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="w-15 h-12" src="{{ asset('images/logo.png') }}" alt="Medieval-Medical">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">HOME</x-nav-link>
                            <x-nav-link href="/about-us" :active="request()->is('abouts-us')">ABOUT US</x-nav-link>
                            <x-nav-link href="/our-team" :active="request()->is('our-team')">OUR TEAM</x-nav-link>
                            <x-nav-link href="/products" :active="request()->is('products')">PRODUCT CATEGORY</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">CONTACTS</x-nav-link>
                        </div>
                    </div>
                </div>

        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">HOME</a>
                <a href="/about-us" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">ABOUT US</a>
                <a href="/our-team" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">OUR TEAM</a>
                <a href="/products" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PRODUCT CATEGORY</a>
                <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">CONTACT US</a>
            </div>
        </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{ $slot }}
        </div>
    </main>
</div>

</body>
</html>
