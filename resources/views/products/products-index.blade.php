<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MW</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    @section('header-content')
    <header class="bg-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <nav class="flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-gray-900">Product</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Features</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Marketplace</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Company</a>
            </nav>
            <a href="/cadastrar" class="text-gray-600 hover:text-gray-900 flex items-center">
                Register
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                </svg>
            </a>
        </div>
    </header>
    @show
    @section('main-content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($products as $product)
        <div class="border p-4 rounded-lg shadow-md bg-white">
            <div class="bg-gray-100 p-4 rounded-md mb-4 flex items-center justify-center">
                <img src="/img/products/{{ $product->image }}" alt="Product's Image" class="w-full h-48 object-cover rounded-md">
            </div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
            <p class="text-lg font-bold text-indigo-600 mb-4">R$ {{ $product->price }}</p>
            <a href="{{ route('products.show', $product->id) }}" class="inline-block px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">
                View Details
            </a>
        </div>
        @endforeach
    </div>
    
    @show
</body>
</html>