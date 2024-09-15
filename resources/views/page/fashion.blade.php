<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style> 

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="max-w-[1920px] mx-auto">
    <div class="max-w-[1920px] px-40">
        <nav class="flex mt-4">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 bg-gray-100 px-3 py-1 rounded-md">
                <li>
                    <div class="flex items-center">
                        <span
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white"
                            >Home</span
                        >
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg
                            class="w-6 h-6 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span
                            class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400"
                            >Fashion</span
                        >
                    </div>
                </li>
            </ol>
        </nav>
        <div class="flex mt-8">
            <div class="w-2/6 p-8 space-y-4">
                <div class="flex justify-between items-center">
                    <span>Filter By</span>
                    <span>Clear Filter</span>
                </div>
                <div>
                    <span>Sorting</span>
                    <div class="flex space-x-6 py-4">
                        <div class="flex items-center ">
                            <input checked id="sort" type="radio" value="" name="sort" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="latest" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latest</label>
                        </div>
                        <div class="flex items-center">
                            <input id="sort" type="radio" value="" name="sort" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="popular" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Popular</label>
                        </div>
                    </div>
                </div>
                <form action="{{ route('filter') }}">
                    <div class="space-y-4">
                        <div>
                            <span class="text-gray-900 text-md">Item Name</span>
                            <div class="flex space-x-6">
                                <input type="text" name="name" id="name" class="bg-gray-200 drop-shadow-sm text-gray-900 text-sm rounded-md w-full p-2.5 outline-none" placeholder="Item Name" >
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-900 text-md">Price Range</span>
                            <div class="flex space-x-2">
                                <input type="text" name="min" id="name" class="bg-gray-200 drop-shadow-sm text-gray-900 text-sm rounded-md w-full p-2.5 outline-none" placeholder="Min" >
                                <input type="text" name="max" id="name" class="bg-gray-200 drop-shadow-sm text-gray-900 text-sm rounded-md w-full p-2.5 outline-none" placeholder="Max" >
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-900 text-md">Category</span>
                            <select id="category" name="category_id" class="text-gray-900 text-sm p-2.5 rounded-md bg-gray-200 w-full focus:outline-none">
                                <option selected>Choose One</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <span class="text-gray-900 text-md">Item Condition</span>
                            <select
                                    id="condition"
                                    name="condition"
                                    class="bg-gray-200 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                                >
                                    <option selected>Choose One</option>
                                    <option value="new">New</option>
                                    <option value="used">Used</option>
                            </select>
                        </div>
                        <div>
                            <span class="text-gray-900 text-md">Type</span>
                            <select
                                    id="type"
                                    name="type"
                                    class="bg-gray-200 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                                >
                                    <option selected>Choose One</option>
                                    <option value="sell">Sell</option>
                                    <option value="buy">Buy</option>
                                    <option value="exchange">Exchange</option>
                            </select>
                        </div>
                    <button type="submit" class="w-full bg-blue-700 rounded-md text-white py-4">Apply Filter</button>

                </div>

                </form>
            </div>
            <div class="w-4/6 p-8">
                <div class="grid grid-cols-3 gap-6">
                    @foreach ($products as $product)
                    <a href="{{ route('products.detail',['id' => $product->id]) }}" class="rounded-md bg-gray-50 drop-shadow-md">
                        <img src="{{asset('/storage/image/Product/'.$product->photo)}}" class="w-full h-40 object-contain text-blue-600" alt="">
                        <div class="bg-gray-100 p-3 rounded-sm">
                            <div class="flex justify-between items-center">
                                <span class="text-md text-gray-900">{{ $product->name }}</span>
                                <span class="text-blue-700 text-sm">{{ $product->condition }}</span>
                            </div>
                            <span class="text-blue-700 text-sm">${{ $product->price }}</span>
                            <div class="mt-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-1 bg-gray-500 text-white rounded-full">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <span class="text-gray-600 text-md">
                                    {{ $product->owner_name }}
                                </span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>