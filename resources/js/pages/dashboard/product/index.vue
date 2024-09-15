<template>
    <div class="p-4">
        <nav class="flex">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li aria-current="page">
                    <div class="flex items-center">
                        <span
                            class="ml-1 text-sm font-medium text-blue-600 md:ml-2 dark:text-gray-400"
                            >Items List</span
                        >
                    </div>
                </li>
            </ol>
        </nav>
        <div class="flex justify-end py-6">
            <router-link
                to="/product/add"
                class="flex items-center space-x-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 focus:outline-none"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15"
                    />
                </svg>
                <span class="text-sm">Add Items</span>
            </router-link>
        </div>
        <div>
            <label for="">Show:</label>
            <select
                id="countries"
                class="bg-gray-50 ml-4 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 px-4 py-2"
            >
                <option selected value="US">10 rows</option>
                <option value="US">20 rows</option>
                <option value="US">30 rows</option>
            </select>

            <div class="overflow-x-auto relative mt-6">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-white uppercase bg-blue-700">
                        <tr>
                            <th scope="col" class="text-center">Action</th>
                            <th scope="col" class="py-4 px-6">No</th>
                            <th scope="col" class="py-4 px-6">Name</th>
                            <th scope="col" class="py-4 px-6">Category</th>
                            <th scope="col" class="py-4 px-6">Description</th>
                            <th scope="col" class="py-4 px-6">Price</th>
                            <th scope="col" class="py-4 px-6">Owner</th>
                            <th scope="col" class="py-4 px-6">Publish</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(product, index) in products"
                            :key="product.id"
                            class="bg-white border-b"
                        >
                            <td class="flex space-x-3 justify-center py-4">
                                <a href="#" class="font-medium text-blue-600">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-8 h-8 p-1.5 rounded-lg bg-green-400 text-white"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                </a>
                                <a href="#" class="font-medium text-blue-600">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-8 h-8 p-1.5 bg-red-400 rounded-lg text-white"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </a>
                            </td>
                            <td class="py-4 px-6">{{ index + 1 }}</td>
                            <td class="py-4 px-6">{{ product.name }}</td>
                            <td class="py-4 px-6">
                                {{ product.categoryName }}
                            </td>
                            <td class="py-4 px-6">
                                <div className="inline-block w-[200px]">
                                    <span className="truncate block">
                                        {{ product.description }}
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-6">${{ product.price }}</td>
                            <td class="py-4 px-6">{{ product.ownerName }}</td>
                            <td class="py-4 px-6">
                                <label
                                    class="inline-flex relative items-center cursor-pointer"
                                >
                                    <input
                                        type="checkbox"
                                        :checked="product.status"
                                        class="sr-only peer"
                                    />
                                    <div
                                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
                                    ></div>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-between py-4 text-md">
                    <span>Showing 1 to 5 of 24</span>

                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a
                                    href="#"
                                    class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >
                                    <span class="sr-only">Previous</span>
                                    <svg
                                        aria-hidden="true"
                                        class="w-5 h-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >1</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >2</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    aria-current="page"
                                    class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                                    >3</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >4</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    >5</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >
                                    <span class="sr-only">Next</span>
                                    <svg
                                        aria-hidden="true"
                                        class="w-5 h-5"
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
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import api from "@/api.js";
import { ref, reactive, onMounted } from "vue";

console.log("here");

let products = ref([]);

const getResults = async (page = 2) => {
    api.get("/products")
        .then((response) => {
            products.value = response.data;
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error.data.message);
        });
};

getResults();
</script>
