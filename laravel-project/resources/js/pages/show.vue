<script setup>
    import blog from "../layout/blog.vue";

    defineProps({
        "article": Object,
    });
  </script>

  <template>
    <blog>
        <div class="w-1/2 bg-black">test</div>
        <article class="mx-auto mt-10 flex justify-center max-w-5xl border-b-2">
            <!-- <img
                src="/images/kinsta-logo.png"
                class="w-80 h-80 rounded-xl mx-auto py-5"
                alt=""
            /> -->
            <div class="text-left flex flex-col pt-5 pb-10 px-10">
                <h1 class="text-xl font-semibold mb-10">{{ article.title }}</h1>
                <p>{{ article.body }}</p>
            </div>
        </article>
    </blog>
  </template>
