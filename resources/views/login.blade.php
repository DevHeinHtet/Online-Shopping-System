<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel</title>

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
    <div class="h-screen flex items-center justify-center">
        <div class="p-4 shadow-lg rounded-md">
            <div class="flex flex-col items-center py-10">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-10 h-10 p-1.5 bg-blue-900 text-white rounded-lg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"
                    />
                </svg>
                <h1 class="text-3xl font-bold mt-6">Log in to your account</h1>
                <span class="text-base text-gray-400">Welcome Back!</span>
            </div>
            <form action="{{ route('check') }}" method="POST">
                @csrf
                <div>
                    <label
                        for="email"
                        class="block mb-2 text-sm font-bold text-gray-900"
                    >
                        Email</label
                    >
                    <input
                        type="text"
                        name="email"
                        class="w-96 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block p-2"
                        placeholder="admin@ps.com"
                        value="{{ old('email') }}"
                        required
                    />
                </div>
                <div class="mt-4">
                    <label
                        for="password"
                        class="block mb-2 text-sm font-bold text-gray-900"
                    >
                        Password</label
                    >
                    <input
                        type="password"
                        name="password"
                        value="{{ old('password') }}"
                        class="w-96 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block p-2"
                        placeholder="password"
                        required
                    />
                </div>
                <div class="my-6">
                    <button
                        type="submit"
                        class="w-full py-2 bg-blue-600 text-sm text-white font-bold rounded-md hover:bg-blue-700"
                    >
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>