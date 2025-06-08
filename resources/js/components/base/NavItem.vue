<script setup>
    const { linkto, focused } = defineProps(['linkto', 'focused']);
    const redirect = () => {
        location.href = linkto;
    };
    
</script>

<template>
    <span class="nav-item pointer p-2 flex justify-center align-center" :focused="focused" @click="redirect">
        <slot />
    </span>
</template>

<style scoped>
    .nav-item { 
        height: fit-content;
        user-select: none;
    }

    .nav-item[focused="true"] {
        border: 2px solid var(--red);
        color: var(--red);
        border-radius: 20px;
        transition: background-color .2s linear, color .2s linear;
    }

    .nav-item[focused="true"]:hover {
        background-color: var(--red);
        color: white;
    }

</style>