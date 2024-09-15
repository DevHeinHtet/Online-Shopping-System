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
    <div class="max-w-[1920px]">
        <div class="relative w-full h-[18rem] bg-cover" style="background-image: url({{asset('image/headerbg.png')}});">
            <form action="">
                <div class="absolute flex justify-center -bottom-6 inset-x-0">
                    <div class="bg-white drop-shadow-md flex items-center rounded-md p-1">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" name="search" class="bg-gray-50 text-gray-900 text-sm block w-80 pl-10 p-2.5 outline-none" placeholder="Search">
                        </div>
                        <span class="text-gray-300">|</span>
                        <select id="category" name="category" class="text-gray-900 text-sm p-1 bg-transparent w-full focus:outline-none">
                            <option selected>Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="bg-blue-600 rounded-md drop-shadow-md px-4 text-white ml-4 hover:bg-blue-700">Search</button>
                </div>
            </form>
        </div>
        <div class="mt-20 mx-[15rem]">
            <div class="flex justify-between items-center">
                <span class="text-lg text-gray-900">What are you looking for?</span>
                <a href="" class="text-blue-600 hover:underline">View More ></a>
            </div>
            <div class="grid grid-cols-6 gap-6 mt-8">
                @foreach ($categories as $category)
                   @if ($loop->index <6)
                   <a href="{{ route('products.list') }}" class="flex flex-col justify-center items-center py-6 bg-gray-100 rounded-md drop-shadow-sm space-y-2">
                        <div class="p-3 bg-gray-200 rounded-full">
                            <img src="{{asset('/storage/image/category/'.$category->photo)}}" class="w-10 h-10 rounded-full text-blue-600" alt="">
                        </div>
                        <span class="text-gray-600">{{ $category->name }}</span>
                    </a>
                   @endif
                @endforeach
            </div>
        </div>
        <div class="mt-8 mx-[15rem]">
            <div class="flex justify-between items-center">
                <span class="text-lg text-gray-900">Recent Items</span>
                <a href="" class="text-blue-600 hover:underline">View More ></a>
            </div>
            <div class="grid grid-cols-4 gap-6 my-8">
                @foreach ($products as $product)
                <div class="rounded-md bg-gray-50 drop-shadow-md">
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
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</body>
</html>