<script setup>
    const { image, title, role } = defineProps(['image', 'title', 'role']);
    // TODO Implement proper image rendering
    // TODO Implement proper role rendering
</script>

<template>
    <div 
        class="pointer book flex justify-center align-center text-center direction-column"
        :title="title"
    >
        <i>{{ title }}</i>
        <b>Rol: {{ role }}</b>
    </div>
</template>
<style scoped>
    .book {
        width: 200px; height: 300px;
        border-radius: var(--border-radius);
        background-color: var(--light-red);
        color: var(--white);
        transition: box-shadow .2s linear;
    }

    .book:hover {
        box-shadow: 2px 2px 2px 2px lightgray;
    }
</style>