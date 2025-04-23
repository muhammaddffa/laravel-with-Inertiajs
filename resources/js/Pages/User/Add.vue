<script setup>
import { Head } from "@inertiajs/vue3";
import { router } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: null,
  email: null,
  password: null,
})

function submit() {
    form.post('/users')
}

</script>

<template>
    <head>
        <title>Add User</title>
    </head>
    <div class="">
        <!-- <h1>Add new User</h1> -->
        <div class="max-w-xl mx-auto p-6 bg-white rounded-xl shadow-md">
            <h2 class="text-2xl font-bold mb-4">Add New User</h2>

            <form @submit.prevent="submit" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1"
                        >Nama</label
                    >
                    <input
                        v-model="form.name"
                        type="text"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                    />
                    <div class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-1"
                        >Email</label
                    >
                    <input
                        v-model="form.email"
                        type="email"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                    />
                    <div class="text-red-500" v-if="form.errors.email">{{ form.errors.email }}</div>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-1"
                        >Password</label
                    >
                    <input
                        v-model="form.password"
                        type="password"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                    />
                    <div class="text-red-500" v-if="form.errors.password">{{ form.errors.password }}</div>
                </div>

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
</template>
