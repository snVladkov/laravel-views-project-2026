<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
    <div>
        <div class="relative">
            <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-48 object-cover">
            <span class="absolute top-2 right-2 bg-slate-900 text-white text-xs px-2 py-1 rounded font-medium">
                {{ $badge }}
            </span>
        </div>

        <div class="p-4">
            <span class="text-xs font-semibold text-blue-600 uppercase tracking-wide">{{ $category }}</span>
            <h3 class="font-bold text-lg text-gray-800 mt-1">{{ $name }}</h3>
            
            @if($instock)
                <p class="text-xs text-green-600 font-medium mt-1">In Stock</p>
            @else
                <p class="text-xs text-red-600 font-medium mt-1">Out of Stock</p>
            @endif
        </div>
    </div>

    <div class="p-4 border-t border-gray-100 flex items-center justify-between">
        <span class="text-xl font-extrabold text-gray-900">${{ number_format($price, 2) }}</span>
        
        <button class="px-3 py-1.5 rounded-lg text-sm font-medium transition {{ $instock ? 'bg-blue-600 hover:bg-blue-700 text-white' : 'bg-gray-300 text-black cursor-not-allowed' }}">
            Add to Cart
        </button>
    </div>
</div>