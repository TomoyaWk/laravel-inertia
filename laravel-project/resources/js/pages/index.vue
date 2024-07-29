<script setup>
  import blog from "../layout/blog.vue";
  import { Link } from "@inertiajs/vue3";
  defineProps({
    articles: Object,
    User: Object,
  });
</script>

<template>
    <blog>
        <section class="space-y-5 border-b-2 pb-10">
        <article
            v-for="article in articles" :key="article.id"
            class="flex justify-center items-center shadow bg-white rounded-xl p-4 mx-auto max-w-3xl"
            >
            <img src="../../images/dog_icon.png"
            class="w-32 h-32 rounded-xl object-cover border-2"
            alt="Article thumbnail" />
            <div class="flex flex-col text-left justify-between pl-3 space-y-5">
                <h3 class="text-xl font-semibold text-indigo-600 hover:text-indigo-800">
                <Link :href="'/posts/' + article.id ">
                    {{ article.title }}
                </Link>
                </h3>
                <p>
                {{ article.excerpt }}
                </p>
                <small>{{ article.author.name  }}</small>
                <small>{{ article.created_at  }}</small>

                <Link :href="'/posts/' + article.id " class="text-indigo-600 hover:text-indigo-800 w-fit self-end font-semibold">
                    Read more
                </Link>
            </div>

        </article>
        </section>
    </blog>
</template>
