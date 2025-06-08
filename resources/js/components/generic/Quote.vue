<template>
    <span class="quote">
        <slot />
    </span>
</template>

<style scoped>
    .quote {
        font-style: italic;
        color: var(--white);
        text-align: center;
        line-break: strict;
    }
</style>