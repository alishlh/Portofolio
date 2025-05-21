<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
        .nav-item {
            transition: all 0.3s ease;
        }
        .nav-item:hover {
            transform: translateY(-3px);
        }
        .info-card {
            transition: all 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="min-h-screen text-gray-800">
    <!-- Background -->
    <div class="fixed inset-0 bg-gradient-to-br from-blue-900 to-blue-600 opacity-95"></div>

    <!-- Navigation -->
    <header class="relative z-10 py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center">
            <a href="home.html" class="text-4xl font-bold text-white mb-4 sm:mb-0">AL</a>
            
            <nav class="w-full sm:w-auto">
                <ul class="flex flex-wrap justify-center gap-3 sm:gap-5">
                    <li class="nav-item">
                        <a href="home.html" class="flex items-center gap-2 px-5 py-3 rounded-xl shadow-lg transition-colors
    {{ Request::routeIs('home') ? 'bg-blue-700 text-white hover:bg-blue-800' : 'bg-white text-blue-700 hover:bg-blue-700 hover:text-white' }}">

                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="flex items-center gap-2 px-5 py-3 rounded-xl shadow-lg transition-colors
    {{ Request::routeIs('about') ? 'bg-blue-700 text-white hover:bg-blue-800' : 'bg-white text-blue-700 hover:bg-blue-700 hover:text-white' }}">

                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
                            </svg>
                            About Me
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('skill') }}" class="flex items-center gap-2 px-5 py-3 rounded-xl shadow-lg transition-colors
    {{ Request::routeIs('skill') ? 'bg-blue-700 text-white hover:bg-blue-800' : 'bg-white text-blue-700 hover:bg-blue-700 hover:text-white' }}">

                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                            </svg>
                            Skills
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('projects') }}" class="flex items-center gap-2 px-5 py-3 rounded-xl shadow-lg transition-colors
    {{ Request::routeIs('projects') ? 'bg-blue-700 text-white hover:bg-blue-800' : 'bg-white text-blue-700 hover:bg-blue-700 hover:text-white' }}">

                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z"/>
                            </svg>
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="flex items-center gap-2 px-5 py-3 rounded-xl shadow-lg transition-colors
    {{ Request::routeIs('contact') ? 'bg-blue-700 text-white hover:bg-blue-800' : 'bg-white text-blue-700 hover:bg-blue-700 hover:text-white' }}">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z"/>
                            </svg>
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 py-20 px-4 sm:px-6 lg:px-8">
       @yield('content')
    </main>
</body>

</html>