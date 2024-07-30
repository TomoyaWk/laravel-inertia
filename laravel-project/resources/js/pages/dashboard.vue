<script setup>
    import admin from "../layout/admin.vue";
    import { router } from "@inertiajs/vue3";

    defineProps({
        "loginUser": Object,
        "articles": Object,
    })

    function deleteArtcle(id) {
        router.get(`/admin/edit/${id}`);
    }
  </script>

  <template>
    <admin>
        {{ loginUser.name }}
        <h2 class="text-xl font-bold">Articles:</h2>

        <div class="container p-2 mx-auto sm:p-4 dark:text-gray-800">
            <h2 class="mb-4 text-2xl font-semibold leading-tight">Articles:</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col class="w-24">
                    </colgroup>
                    <thead class="dark:bg-gray-300">
                        <tr class="text-left">
                            <th class="p-3">ID #</th>
                            <th class="p-3">Title</th>
                            <th class="p-3">Body</th>
                            <th class="p-3">CreatedAt</th>
                            <th class="p-3">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="article in articles" :key="article.id"
                        class="border-b border-opacity-20 dark:border-gray-300 dark:bg-gray-50">
                            <td class="p-3">
                                <p>{{ article.id }}</p>
                            </td>
                            <td class="p-3">
                                <p>{{ article.title }}</p>
                            </td>
                            <td class="p-3">
                                <p>{{ article.body.substring(0, 20) + "..."  }}</p>
                            </td>
                            <td class="p-3">
                                <p>{{ article.created_at }}</p>
                            </td>
                            <td class="p-3">
                                <button class="self-center items-center justify-center m-1 px-3 py-1 font-semibold rounded border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-400">
                                    Edit
                                </button>
                                <button class="self-center items-center justify-center m-1 px-3 py-1 font-semibold rounded border-2 border-red-500 text-red-500 hover:text-white hover:bg-red-400">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="py-5">
            <button class="self-center px-8 py-3 font-semibold rounded bg-green-500 text-gray-50">
                Create Article
            </button>
        </div>

    </admin>
  </template>
