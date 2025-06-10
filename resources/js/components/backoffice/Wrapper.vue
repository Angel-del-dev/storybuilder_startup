<template>
    <main 
        id="wrapper"
        class="flex justify-start align-start direction-column"
    >
        <slot />
    </main>
</template>

<style scoped>
    main#wrapper {
        width: 100%;
        height: 100%;
    }
</style>