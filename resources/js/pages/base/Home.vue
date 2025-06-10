<script setup>
    import Wrapper from '@/components/generic/Wrapper.vue';
    import Navbar from '@/components/base/Navbar.vue';
</script>

<template>
    <Wrapper>
        <Navbar />
        <article 
            id="home-placeholder"
            class="w-100 grow-1 flex justify-center align-center"
        >
            Imagina, planea, escribe y colabora...
            <br />
            Todo en un mismo sitio
        </article>
    </Wrapper>
</template>

<style scoped>
    #home-placeholder {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
    }
</style>