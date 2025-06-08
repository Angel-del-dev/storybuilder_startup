<script setup lang="ts">

import Card from '@/components/generic/Card.vue';
import Quote from '../generic/Quote.vue';
import Author from '../generic/Author.vue';

const { quote, author } = defineProps(['quote', 'author']);
</script>

<template>
    <!-- <Navbar /> -->
    <div id='wrapper' class="flex justify-center align-center">
        <div id="card-wrapper">
            <Card class="flex justify-center align-center">
                <div id="form" class="h-100 flex-2">
                    <slot />
                </div>
                <div id="inspirational-quote" class="h-100 flex-1 flex justify-center align-center direction-column">
                    <h1 id="daily-fragment">Fragmento de autor</h1>
                    <Quote>{{ quote }}</Quote>
                    <Author>{{ author }}</Author>
                </div>
            </Card>
        </div>
    </div>
</template>

<style scoped>
    #wrapper {
        width: 100%;
        height: 100%;
    }

    #card-wrapper {
        width: 80%;
        height: 60%;
    }

    #form {
        transition: flex 1s ease-in-out;
    }

    #inspirational-quote {
        background-color: rgb(247, 91, 74);
        border-top-right-radius: var(--border-radius);
        border-bottom-right-radius: var(--border-radius);
        padding: 10px;
    }

    #daily-fragment {
        color: white;
        text-align: center;
        font-size: 1.4rem;
        margin: 0;
        padding: 10px;
    }

    @media (max-width: 650px) {
        #inspirational-quote {
            display: none;
        }
    }

    @media (min-width: 1250px) {
        #card-wrapper {
            width: 100vmin;
        }
    }
</style>
