<script setup>
import { Head, router } from '@inertiajs/vue3';
defineProps({
    users: Object,
});

function gotoAddUser(){
    router.get('/users/add')
}

</script>

<template>
    <head>
        <title>User List</title>
    </head>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h1>User List</h1>
        <div class="my-2">
            <button class="bg-gray-50 dark:bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded" @click="gotoAddUser()">Add New</button>
        </div>
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, index) in users" :key="index"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ index + 1 }}</td>
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                    <td>{{ user.name }}</td>
                    </th>
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                    <td>{{ user.email }}</td>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</template>