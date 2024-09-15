<template>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/3">
            <form @submit.prevent="submit">
                <div class="mb-4">
                    <input type="file" @change="onFileChange" />
                </div>
                <button
                    class="px-6 py-1.5 text-white bg-blue-600"
                    type="submit"
                >
                    Button
                </button>
            </form>
        </div>
    </div>
</template>
<script setup>
import api from "@/api.js";
import { ref, reactive } from "vue";
import axios from "axios";

const image = ref("");

let form = reactive({
    name: "Mango",
    status: "1",
    photo: "",
});

const onFileChange = (e) => {
    form.photo = e.target.files[0];
    console.log(form.photo);
};

const submit = async () => {
    // const formdata = new FormData();
    // formdata.append("photo", image.value);
    // formdata.append("name", "Orange");
    // formdata.append("status", "1");
    console.log(form);
    await api
        .post("/categories", form)
        .then((response) => {
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error.data.message);
        });
};
</script>
