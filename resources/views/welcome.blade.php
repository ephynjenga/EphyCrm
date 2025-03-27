<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Layout</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-6xl px-4">
            <!-- Left Row -->
            <div class="flex flex-col justify-between items-center text-center h-full">
                <!-- Icon -->
                <div class="mb-6">
                    <svg class="h-12 w-12 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25l6.364 6.364-1.768 1.768L12 5.768 7.404 10.382 5.636 8.614 12 2.25zM4.5 10.5V21h15V10.5m-9.75 4.5h4.5m-4.5 3h4.5"/>
                    </svg>
                </div>
                <!-- Heading -->
                <h1 class="text-3xl font-bold mb-4">Welcome to Laravel</h1>
                <!-- Paragraph -->
                <p class="text-lg text-gray-400 mb-6">
                    Explore the features of Laravel. Log in or register to get started.
                </p>
                <!-- Buttons -->
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}"
                       class="px-6 py-2 bg-red-500 text-white font-medium rounded-md hover:bg-red-600 transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-6 py-2 bg-gray-700 text-white font-medium rounded-md hover:bg-gray-600 transition">
                        Register
                    </a>
                </div>
            </div>

            <!-- Right Row -->
            <div class="flex items-center justify-center">
                <img src="https://via.placeholder.com/500x500" alt="Right Image" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</body>
</html>
