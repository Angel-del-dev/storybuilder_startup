<script setup>
    import Wrapper from '@/components/backoffice/Wrapper.vue';
    import Navbar from '@/components/base/Navbar.vue';
    import Container from '@/components/backoffice/Container.vue';
</script>

<template>
    <Wrapper>
        <Navbar />
        <Container>
            <div 
                id="dashboard-content"
                class="w-100 h-100 flex justify-center align-center"
            >
                Dashboard
            </div>
        </Container>
    </Wrapper>
</template>
<style scoped>
    #dashboard-content {
        font-size: 2rem;
    }
</style>