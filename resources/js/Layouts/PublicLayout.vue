<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <main style="background-color: #FFFECE;" class=" min-h-screen">
    <header style="background-color: #F1E7E7;" class="flex justify-center items-center gap-6 py-4 shadow-md">
      <Link href="/"class="font-semibold hover:underline">Home</Link>
      <Link href="/users" class="font-semibold hover:underline">User</Link>
    </header>
    <article class="p-6">
      <slot />
    </article>
  </main>
</template>
