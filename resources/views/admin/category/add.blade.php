@extends('admin.template.app')
@section('content')
@include('tool.message')
<div class="p-4">
    <nav class="flex">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <div class="flex items-center">
                    <router-link
                        to="/categories"
                        href="#"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white"
                        >Categories</router-link
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
                        class="ml-1 text-sm font-medium text-blue-600 md:ml-2 dark:text-gray-400"
                        >Add Categories</span
                    >
                </div>
            </li>
        </ol>
    </nav>
    <div>
        <p class="px-4 py-2.5 bg-gray-200 rounded-md mt-6 text-base">
            Add Items
        </p>
        <div class="flex">
            <div class="flex flex-col w-1/2 p-4 text-base">
                <form action="{{ route('category.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4 space-y-2">
                        <label for="item_name">Category Name*</label>
                        <input
                            type="text"
                            id="item_name"
                            name="name"
                            value="{{ old('name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                            placeholder="Input Name"
                            required
                        />
                    </div>

                    <div class="mt-4 space-y-2">
                        <label>Item Photo*</label>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            SVG, PNG, JPG or GIF (MAX. 800x400px)
                        </p>
                        <div
                            class="flex items-center justify-center w-full"
                        >
                            <label
                                for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
                            >
                                <div
                                    class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg
                                        aria-hidden="true"
                                        class="w-10 h-10 mb-3 text-gray-400"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                                        ></path>
                                    </svg>
                                    <p
                                        class="mb-2 text-sm text-gray-500 text-center"
                                    >
                                        <span class="font-semibold"
                                            >Drag and drop here<br />or</span
                                        >
                                    </p>
                                    <span
                                        class="text-sm font-bold bg-blue-700 px-8 py-2 text-white rounded-md"
                                        >Choose File</span
                                    >
                                </div>
                                <input
                                    id="dropzone-file"
                                    type="file"
                                    accept="image/*"
                                    name="photo"
                                    class="hidden"
                                />
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label>Status</label>
                        <div class="flex items-center mb-4">
                            <input
                                id="status"
                                type="checkbox"
                                name="status"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 dark:bg-gray-700"
                            />
                            <label
                                for="status"
                                class="ml-2 text-sm font-medium text-gray-900"
                                >Publish</label
                            >
                        </div>
                    </div>
                    <div class="mt-6 text-end">
                        <button
                            class="px-8 text-sm py-2 rounded-md text-blue-700"
                        >
                            Cancel
                        </button>
                        <input
                            type="submit"
                            value="Save"
                            class="px-8 text-sm py-2 rounded-md text-white bg-blue-700"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const item = document.querySelector('.category');
    item.classList.add('bg-blue-600');
    item.classList.add('text-white');
   </script>
@endsection