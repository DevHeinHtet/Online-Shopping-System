<script setup>
import sidebarView from "@/pages/dashboard/layout/sidebar.vue";
import { ref, onMounted } from "vue";
onMounted(() => {});
</script>
<template>
    <div class="flex bg-white">
        <sidebarView />
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
            <router-view></router-view>
        </div>
    </div>
</template>
