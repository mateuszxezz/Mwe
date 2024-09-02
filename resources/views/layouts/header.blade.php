@extends('products.products-index')
@section('header-content')

<header class="bg-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <nav class="flex space-x-8">
            <a href="#" class="text-gray-600 hover:text-gray-900">Product</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Features</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Marketplace</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Company</a>
        </nav>
        <a href="#" class="text-gray-600 hover:text-gray-900 flex items-center">
            Log in
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H3" />
            </svg>
        </a>
    </div>
</header>

@endsection