<header class="bg-slate-900 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="TechVolt Electronics Logo" class="h-10 w-auto object-contain">
        </a>
        
        <nav class="flex space-x-6">
            <a href="{{ route('home') }}" class="hover:text-blue-400 font-medium transition {{ Route::is('home') ? 'link-active' : '' }}">
                Home
            </a>
            <a href="{{ route('products') }}" class="hover:text-blue-400 font-medium transition {{ Route::is('products') ? 'link-active' : '' }}">
                Products
            </a>
            <a href="{{ route('contacts') }}" class="hover:text-blue-400 font-medium transition {{ Route::is('contacts') ? 'link-active' : '' }}">
                Contacts
            </a>
        </nav>

        <div class="flex items-center gap-4">
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium text-sm transition">
                Cart (0)
            </a>
        </div>
    </div>
</header>