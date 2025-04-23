<script setup>
import { Head } from "@inertiajs/vue3";
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  avatar: null,
})

function submit() {
    form.post('/upload-file', FormData)
}

</script>
<template>
    <Head>
      <title>File Upload</title>
      <meta name="description" content="project inertia" />
    </Head>
  
    <div class="flex items-center justify-center px-4">
      <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h3 class="text-xl font-bold mb-4 text-gray-800">Upload File</h3>
  
        <form @submit.prevent="submit" class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Choose File</label>
            <input
              type="file"
              @input="form.avatar = $event.target.files[0]"
              class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700"
            />
          </div>
  
          <button
            type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
  </template>
  
