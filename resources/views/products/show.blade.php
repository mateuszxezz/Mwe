{{-- resources/views/products/show.blade.php --}}
    
        <div class="max-w-lg mx-auto">
        <h1 class="text-3x1">{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p class="text-lg font-bold">{{ $product->price }}</p>
        </div>
