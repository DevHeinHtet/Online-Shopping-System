<template lang="">
    <div class="p-4">
        <nav class="flex">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li>
                    <div class="flex items-center">
                        <router-link
                            to="/products"
                            href="#"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white"
                            >Item List</router-link
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
                            >Add Items</span
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
                    <span>Item Information</span>
                    <div class="mt-4 space-y-2">
                        <label for="item_name">Item Name*</label>
                        <input
                            type="text"
                            id="item_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                            placeholder="Input Name"
                            required
                        />
                    </div>
                    <div class="mt-4 space-y-2">
                        <label for="category">Select Category* </label>
                        <select
                            v-model="categoryId"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                        >
                            <option selected>Choose a country</option>
                            <option
                                v-for="category in categories"
                                :value="category.id"
                            >
                                {{ category.name }}
                            </option>
                        </select>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label for="item_price">Price*</label>
                        <input
                            type="text"
                            id="item_price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                            placeholder="Enter Price"
                            required
                        />
                    </div>

                    <label for="item_price" class="mt-4">Description*</label>
                    <div
                        class="w-full mt-2 border border-gray-300 rounded-lg bg-gray-50"
                    >
                        <div
                            class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600"
                        >
                            <div
                                class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600"
                            >
                                <div
                                    class="flex items-center space-x-1 sm:pr-4"
                                >
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Attach file</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Embed map</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only"
                                            >Upload image</span
                                        >
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Format code</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Add emoji</span>
                                    </button>
                                </div>
                                <div
                                    class="flex flex-wrap items-center space-x-1 sm:pl-4"
                                >
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Add list</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Settings</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Timeline</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                    >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="sr-only">Download</span>
                                    </button>
                                </div>
                            </div>
                            <button
                                type="button"
                                data-tooltip-target="tooltip-fullscreen"
                                class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span class="sr-only">Full screen</span>
                            </button>
                            <div
                                id="tooltip-fullscreen"
                                role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                            >
                                Show full screen
                                <div
                                    class="tooltip-arrow"
                                    data-popper-arrow
                                ></div>
                            </div>
                        </div>
                        <div
                            class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800"
                        >
                            <label for="editor" class="sr-only"
                                >Publish post</label
                            >
                            <textarea
                                id="editor"
                                rows="5"
                                class="block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0"
                                placeholder="Enter Description"
                                required
                            ></textarea>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label for="condition">Select Item Condition</label>
                        <select
                            id="condition"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                        >
                            <option selected>Select Item Condition</option>
                            <option value="new">New</option>
                            <option value="used">Used</option>
                        </select>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label for="type">Select Item Type</label>
                        <select
                            id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                        >
                            <option selected>Select Item Type</option>
                            <option value="sell">Sell</option>
                            <option value="buy">Buy</option>
                            <option value="exchange">Exchange</option>
                        </select>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label>Status</label>
                        <div class="flex items-center mb-4">
                            <input
                                id="status"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 dark:bg-gray-700"
                            />
                            <label
                                for="status"
                                class="ml-2 text-sm font-medium text-gray-900"
                                >Publish</label
                            >
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label>Item Photo*</label>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            SVG, PNG, JPG or GIF (MAX. 800x400px)
                        </p>
                        <div class="flex items-center justify-center w-full">
                            <label
                                for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
                            >
                                <div
                                    class="flex flex-col items-center justify-center pt-5 pb-6"
                                >
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
                                    class="hidden"
                                />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-1/2 p-4">
                    <span>Owner Information</span>
                    <div class="mt-4 space-y-2">
                        <label for="owner_name">Owner Name*</label>
                        <input
                            type="text"
                            id="owner_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                            placeholder="Owner Name"
                            required
                        />
                    </div>
                    <div class="mt-4 space-y-2">
                        <label for="owner_name">Contact Number</label>
                        <div
                            class="flex justify-between border border-gray-300 rounded-md"
                        >
                            <select
                                id="countries"
                                class="text-gray-900 rounded-tl-md rounded-bl-md text-sm w-20 focus:ring-blue-500 focus:border-blue-500 p-2.5"
                            >
                                <option value="US">95+</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <input
                                type="number"
                                id="first_name"
                                class="text-gray-900 rounded-tr-md rounded-br-md text-sm w-full p-2.5"
                                placeholder="Add Number"
                                required
                            />
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <label
                            for="address"
                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white"
                            >Address</label
                        >
                        <textarea
                            id="address"
                            rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Address"
                        ></textarea>
                    </div>
                    <div class="mt-4">
                        <section>
                            <div
                                id="map_canvas"
                                class="w-full h-[40rem] bg-gray-300 rounded-md"
                            ></div>
                        </section>
                    </div>
                    <div class="mt-6 text-end">
                        <button
                            class="px-8 text-sm py-2 rounded-md text-blue-700"
                        >
                            Cancel
                        </button>
                        <button
                            class="px-8 text-sm py-2 rounded-md text-white bg-blue-700"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import api from "@/api.js";
import { ref, reactive } from "vue";
let categories = ref([]);
const categoryId = ref();
const getResults = async (page = 2) => {
    api.get("/categories")
        .then((response) => {
            categories.value = response.data;
            console.log(categories.value);
        })
        .catch((error) => {
            console.log(error.data.message);
        });
};

getResults();
</script>
