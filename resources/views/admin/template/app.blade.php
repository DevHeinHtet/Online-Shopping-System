<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Panel</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJfzOqR9u2eyXv6OaiuExD3jzoBGGIVKY&libraries=geometry,places&v=weekly"></script>
  </head>
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
<body>
    <div class="flex bg-white">
        @include('admin.template.sidebar')
        <div class="w-full">
            <div
                class="py-2.5 px-4 flex items-center justify-between shadow-sm"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-7 h-7 cursor-pointer"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>
                <div
                    class="w-10 h-10 flex justify-center items-center bg-blue-600 text-white rounded-full"
                >
                    <span>PS</span>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
</body>
</html>