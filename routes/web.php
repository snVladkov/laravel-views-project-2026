<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = [
        ['name' => 'Laptops & PCs', 'count' => '42 Items', 'icon' => '💻'],
        ['name' => 'Smartphones', 'count' => '28 Items', 'icon' => '📱'],
        ['name' => 'Audio & Headphones', 'count' => '35 Items', 'icon' => '🎧'],
        ['name' => 'Gaming Gear', 'count' => '19 Items', 'icon' => '🎮']
    ];

    return view('home', ['categories' => $categories]);
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/products', function () {
    $products = [
        [
            'name' => 'ProBook Ultra 15',
            'category' => 'Laptops',
            'price' => 1299.99,
            'in_stock' => true,
            'badge' => 'Bestseller',
            'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'name' => 'NoiseCancel Wireless Headphones',
            'category' => 'Audio',
            'price' => 249.50,
            'in_stock' => true,
            'badge' => 'New',
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'name' => 'Smart Watch Series X',
            'category' => 'Wearables',
            'price' => 399.00,
            'in_stock' => false,
            'badge' => 'Sold Out',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=500&q=80'
        ],
        [
            'name' => 'Mechanical Gaming Keyboard',
            'category' => 'Accessories',
            'price' => 119.99,
            'in_stock' => true,
            'badge' => 'Sale',
            'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=500&q=80'
        ]
    ];

    return view('products', ['products' => $products]);
})->name('products');