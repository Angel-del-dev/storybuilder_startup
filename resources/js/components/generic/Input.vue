<script setup>

    const { 
        type, placeholder, id, label, update
    } = defineProps(['type', 'placeholder', 'id', 'label', 'update']);
    
    const oninput = e => {
        update(e.target.value);
    };
</script>

<template>
    <div class="w-100 flex justify-start align-start direction-column gap-1">
        <label :for="id">{{ label }}</label>
        <input
            @input="oninput"       
            class="input p-2 w-100" 
            :id="id"
            :placeholder="placeholder" 
            :type="type" 
        />
    </div>
</template>

<style scoped>
    .input {
        border: 1px solid lightgray;
        border-radius: var(--border-radius);
        outline: none;
    }
</style>