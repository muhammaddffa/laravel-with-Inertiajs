<script setup>
import PublicLayout from "../../Layouts/PublicLayout.vue";

defineOptions({ layout: PublicLayout });
defineProps({
    user: Object,
});
</script>

<template>
    <h1>This is all the user page</h1>
    <h2>anda adalah {{ user.name }} dan anda berumur {{ user.age }}</h2>
</template>
