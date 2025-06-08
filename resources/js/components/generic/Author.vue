<template>
    <span class="author w-100 text-right">
        <slot />
    </span>
</template>

<style scoped>
    .author {
        color: var(--black);
        font-style: italic;
        padding: 10px 0;
    }
</style>