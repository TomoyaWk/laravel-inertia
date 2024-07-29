<script setup>
    import admin from "../layout/admin.vue";
    defineProps({
        "loginUser": Object
    })
  </script>

  <template>
    <admin>
        <article class="mx-auto mt-10  max-w-5xl border-b-2">
            <h1 class="heading-1">Login success</h1>

            <h2>welcome {{ loginUser.name }}!</h2>

        </article>
    </admin>
  </template>
