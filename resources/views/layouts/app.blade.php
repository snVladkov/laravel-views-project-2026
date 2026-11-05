<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVolt Electronics</title>
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Navigation Header -->
    @include('header')

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-gray-400 py-8 border-t border-slate-800 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-3">
            <p class="text-lg font-semibold text-white">TechVolt Electronics</p>
            <p class="text-sm">Providing next-gen gadgets and components since 2026.</p>
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} TechVolt Inc. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>