<x-layout>
    <section class="bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
                Next-Gen Tech, <span class="text-blue-400">Unbeatable Prices</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                Upgrade your setup with top-tier laptops, wireless audio, smart home devices, and custom PC hardware.
            </p>
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-8 py-3 rounded-lg shadow-lg transition">
                Shop Catalog
            </a>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Featured Categories</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @empty($categories)
                <p class="text-gray-500 text-center col-span-full">No categories available at the moment.</p>
            @endempty
            
            @foreach ($categories as $category)
                <x-category_card :icon="$category['icon']" :name="$category['name']" :count="$category['count']" />
            @endforeach
        </div>
    </section>
</x-layout>