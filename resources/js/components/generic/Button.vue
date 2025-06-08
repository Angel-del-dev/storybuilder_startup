<script setup>
    import { LoaderCircle } from 'lucide-vue-next';

    const { type, disabled } = defineProps(['type', 'disabled']);
</script>

<template>
    <button class="btn pointer" :style-type="type" :disabled="disabled">
        <slot v-if="!disabled" />
        <span class="flex justify-center align-center gap-2" v-else>
            <LoaderCircle class="animate-spin" />
            <span>Validando...</span>
        </span>
    </button>
</template>

<style scoped>
    .btn {
        border-radius: var(--border-radius);
        border: 0;
        padding: 10px;
        font-size: 1rem;
    }

    .btn[style-type="primary"] {
        background-color: var(--light-red);
        color: var(--white);
    }

    .btn[style-type="primary"][disabled] {
        background-color: var(--red);
    }
</style>