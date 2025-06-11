<script setup lang="ts">
import { Cog, NotebookPen } from 'lucide-vue-next';
    const linkto = (link: string) => {
        location.href = link;
    }; 

    const links = [
        { Caption: 'Mis creaciones', Icon: NotebookPen, Link: '/backoffice/creations' },
        { Caption: 'Cuenta', Icon: Cog, Link: '/backoffice/account' },
    ];
</script>

<template>
    <aside 
        id="main-aside"
        class="h-100"
    >

        <ul
            class="p-2 m-0 flex justify-start align-start direction-column gap-3"
        >
            <li v-for="link in links" @click="linkto(link.Link)">
                <component :is="link.Icon"></component>
                {{ link.Caption }}
            </li>
        </ul>

    </aside>
</template>

<style scoped>
    aside#main-aside {
        width: 30vmin;
        background-color: var(--light-black);
        color: var(--white)
    }

    #main-aside > ul {
        list-style: none;
    }

    #main-aside > ul > li {
        width: 100%;
        display: flex; 
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
    }

    #main-aside > ul > li:hover {
        cursor: pointer;
    }
</style>