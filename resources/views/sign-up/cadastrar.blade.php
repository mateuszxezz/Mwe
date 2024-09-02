<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    @section('signup-content')
        <div class="flex items-center justify-center min-h-screen">
            <form action="/products" method="post" enctype="multipart/form-data" class="max-w-lg w-full bg-white p-8 shadow-md rounded-lg">
                @csrf
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 cursor-pointer focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
    
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product's Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
    
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Product's Description</label>
                    <input type="text" name="description" id="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
    
                <div class="mb-6">
                    <label for="price" class="block text-sm font-medium text-gray-700">Product's Price</label>
                    <input type="text" name="price" id="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
    
                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    @show
</body>
</html>
