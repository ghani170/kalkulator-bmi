<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Penghitung Bmi')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite('resources/css/app.css') 
</head>
<body class="relative bg-white text-gray-800">

    <!-- Navbar -->
    <div class="bg-white">
        <header class="fixed inset-x-0 top-0 z-50 bg-white shadow">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ route('user.home') }}" class="-m-1.5 p-1.5">
                        <h1 class="font-bold text-2xl">Kalkulator BMI</h1>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{  route('user.home') }}" class="text-sm font-semibold text-gray-900">HOME</a>
                    <a href="{{ route('bmi.penghitung') }}" class="text-sm font-semibold text-gray-900">KALKULATOR BMI</a>
                    <a href="{{ route('bmi.history') }}" class="text-sm font-semibold text-gray-900">RIWAYAT BMI</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @if (Auth::check())
                        <form action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm font-semibold text-gray-900">Logout</button>
                        </form>
                    @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
                    @endif
                </div>
            </nav>

            <!-- Mobile menu -->
            <div class="lg:hidden hidden" role="dialog" aria-modal="true" id="mobileMenu">
                <div class="fixed inset-0 z-40 bg-black/30 backdrop-blur-sm" onclick="document.getElementById('mobileMenu').classList.add('hidden')"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="#" alt="Photo" />
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" onclick="document.getElementById('mobileMenu').classList.add('hidden')">
                            <span class="sr-only">Close menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="{{ route('user.home') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">HOME</a>
                                <a href="{{ route('bmi.penghitung') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">KALKULATOR BMI</a>
                                <a href="{{ route('bmi.history') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">RIWAYAT BMI</a>
                            </div>
                            <div class="py-6">
                                @if (Auth::check())
                                    <form action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="text-sm font-semibold text-gray-900">Logout</button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Content -->
    <div class="pt-24">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 mt-24">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Tentang Kami</h3>
                <p class="text-sm leading-relaxed">
                    Kami adalah platform terkemuka yang berdedikasi untuk menyediakan solusi inovatif dan layanan terbaik untuk kebutuhan Anda.
                </p>
            </div>

            

            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Kontak</h3>
                <ul class="space-y-2 text-sm">
                    <li>Email: <a href="mailto:info@namasitus.com" class="hover:text-white transition duration-300">info@PenghitungBmi.com</a></li>
                    <li>Telepon: <a href="tel:+6281234567890" class="hover:text-white transition duration-300">+62 812-3456-7890</a></li>
                    <li>Alamat: Jl. Contoh No. 123, Kota Anda</li>
                </ul>
            </div>

            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.776-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22C17.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.776-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22C17.343 21.128 22 16.991 22 12z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-500">
            &copy; 2025 Penghitung BMI. Semua Hak Dilindungi.
        </div>
    </footer>

</body>
</html>
