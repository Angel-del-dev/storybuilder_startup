<script setup>
    import NavItem from '@/components/base/NavItem.vue';
import { doFetch } from '@/composables/doFetch';
    import { Power, BookText } from 'lucide-vue-next';

    const logout = async () => {
        const { code } = await doFetch('/logout', 'POST', {});
        if(code === 200) return location.reload();
    };
    const IsLogged = window.Laravel.user;
</script>

<template>
    <nav id="navbar" class="p-2 flex justify-between align-center">
        <span class="nav-item-group flex justify-center align-center">
            <NavItem linkto="/">
                <BookText />
            </NavItem>
        </span>
        <span class="nav-item-group flex justify-center align-center">
            <a v-if="IsLogged" class="p-2 pointer" @click.prevent="logout">
                <Power />
            </a>
            <NavItem :focused="true" v-else linkto="/login">Iniciar sesión</NavItem>
        </span>
    </nav>
</template>

<style scoped>
    #navbar {
        width: 100%;
        border-bottom: 1px solid lightgray;
        height: 10vmin;
    }
    .nav-item-group {
        height: 100%;
    }
</style>