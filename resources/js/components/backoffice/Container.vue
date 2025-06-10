<script setup>
    import Aside from '@/components/backoffice/Aside.vue';
</script>

<template>
    <section 
        class="container flex justify-start align-start grow-1 w-100"
    >
        <Aside />
        <article id="page" class=" grow-1 h-100">
            <slot />
        </article>
    </section>
</template>

<style scoped>
    article#page {
        padding: 10px;
        background-color: var(--white);
    }
</style>