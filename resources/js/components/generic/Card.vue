<template>
    <div class="card">
        <slot />
    </div>
</template>

<style scoped>
    .card {
        width: 100%;
        height: 100%;
        border-radius: var(--border-radius);
        box-shadow: 5px 5px 5px 5px lightgray;
        border: 1px solid lightgray;
    }
</style>