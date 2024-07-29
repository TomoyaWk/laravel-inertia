<script setup>
import { router } from '@inertiajs/vue3'
import { reactive } from 'vue';

const form = reactive({
    email : null,
    password: null,
});

function submit(){
    router.post("/login", form);
}
</script>

<template>
    <main class="container mx-auto ">
        <div class="flex flex-col max-w-md p-6 rounded-md bg-gray-50 text-gray-800 px-6 py-8 mx-auto my-10">
            <div class="mb-8 text-center">
                <h1 class="my-3 text-4xl font-bold">Login</h1>
                <p class="text-sm text-gray-600">Sign in to access your account</p>
            </div>
            <div>
                <form @submit.prevent="submit" method="post" class="space-y-5">
                    <div class="space-y-1 text-sm">
                        <label id="email" class="block mb-2 text-sm">Email:</label>
                        <input id="email" v-model="form.email" type="text" class="w-full px-3 py-2 border rounded-md border-gray-300 bg-gray-50 text-gray-800">
                    </div>
                    <div class="space-y-1 text-sm">
                        <label id="password" class="block text-gray-600">Password:</label>
                        <input id="password" v-model="form.password" type="password" class="w-full px-3 py-2 rounded-md border-gray-300 bg-gray-50 text-gray-800 focus:border-violet-600">
                    </div >
                    <button type="submit" class="block w-full p-3 text-center rounded-sm text-gray-50 bg-blue-600">
                        Submit
                    </button>
                    <div class="flex justify-end text-xs text-gray-600">
                        <a rel="noopener noreferrer" href="#">Forgot Password?</a>
                    </div>

                </form>
            </div>
        </div>
    </main>

</template>
