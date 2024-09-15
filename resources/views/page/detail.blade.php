<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Home</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJfzOqR9u2eyXv6OaiuExD3jzoBGGIVKY&libraries=geometry,places&v=weekly"></script>
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
    <div class="max-w-[1920px] px-80">
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
                            class="ml-1 text-sm font-medium text-blue-700 md:ml-2 dark:text-gray-400"
                            >{{ $product->name }}</span
                        >
                    </div>
                </li>
            </ol>
        </nav>
        <img src="{{asset('/storage/image/Product/'.$product->photo)}}" class="w-full h-80 mt-8 bg-gray-200 object-contain text-blue-600" alt="">
        <div class="flex my-8">
            <div class="w-1/2 space-y-4 p-4">
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-900">{{ $product->name }}</span>
                    <span class="text-md text-blue-700">${{ $product->price }}</span>
                </div>
                <div class="flex space-x-4">
                    <div class="flex flex-col space-y-2">
                        <span>Type</span>
                        <span class="px-2 py-1 text-sm rounded-md text-gray-500 bg-gray-100">{{ $product->type }}</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span>Type</span>
                        <span class="text-blue-700 px-2 py-1 text-sm rounded-md  bg-gray-100">{{ $product->condition }}</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span>Type</span>
                        <span class="px-2 py-1 text-sm rounded-md text-gray-500 bg-gray-100">{{ ($product->status) ? 'available' : 'sold out'}}</span>
                    </div>
                </div>
                <div>
                    <span class="text-lg font-bold text-gray-900">Highlighted Information</span>
                    <p class="p-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, molestiae aut illo animi, vitae aspernatur est excepturi</p>
                </div>
                <div>
                    <span class="text-lg font-bold text-gray-900">Product Description</span>
                    <div class="p-1">{{ $product->description }}</div>
                </div>
                <div>
                    <span class="text-lg font-bold text-gray-900">Owner Information</span>
                    <div class="flex flex-col mt-4 p-4 bg-white rounded-md drop-shadow-md ">
                        <span>Contact Number</span>
                        <span>09429041141</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2 bg-gray-200 p-4 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-1 bg-gray-500 text-white rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <div class="flex flex-col p-2">
                        <span class="text-gray-600 text-md">
                            {{ $product->owner_name }}
                        </span>
                        <span class="text-gray-600 text-md">
                            {{ $product->address }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 p-4">
                <p class="text-lg">Location</p>
                <span class="text-lg">{{ $product->address }}</span>
                <div id="map-canvas" class="h-[35rem] bg-green-600 w-full"></div> 
            </div>
        </div>
    </div>

    <script>
        var latlng = new google.maps.LatLng({{$product->latitude_logitude}});

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: latlng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Place the marker for your location!', //The title on hover to display
    });
    </script>
</body>
</html>