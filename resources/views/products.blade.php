<x-layout>
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Electronics Catalog</h1>
                <p class="text-gray-500 text-sm mt-1">Browse our latest collection of technology.</p>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1.5 rounded-full">
                Showing All Items
            </span>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <x-product_card 
                    :name="$product['name']"
                    :category="$product['category']"
                    :price="$product['price']"
                    :instock="$product['in_stock']"
                    :badge="$product['badge']"
                    :image="$product['image']"
                />
            @endforeach
        </div>
    </div>
</x-layout>