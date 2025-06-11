<script setup>
    import Wrapper from '@/components/generic/Wrapper.vue';
    import Navbar from '@/components/base/Navbar.vue';
    import Container from '@/components/backoffice/Container.vue';
    import Book from '@/components/generic/Book.vue';

    const { books } = defineProps(['books']);
</script>

<template>
    <Wrapper>
        <Navbar />
        <Container>
            <div 
                id="dashboard-content"
                class="w-100 h-100 flex justify-start align-start gap-3 flex-wrap"
            >
                <div v-for="book in books">
                    <Book :role="book.role.description" :title="book.book.title" :image="book.book.image_id" />
                </div>
            </div>
        </Container>
    </Wrapper>
</template>
<style scoped>
    #dashboard-content {
        font-size: 2rem;
    }
</style>