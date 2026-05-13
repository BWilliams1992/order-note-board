<template>

    <header>
    </header>

    <main class="flex mx-auto flex-col container">
      <div v-if="page.flash?.success" class="messages bg-green-500 text-white">
        {{ page.flash?.success }}
      </div>
            <div v-if="page.flash?.error" class="messages border-red-600 border-y-2 border-x-8 px-8 my-2 py-2">
        {{ page.flash?.error }}
      </div>
      <slot>

      </slot>
    </main>

</template>

<script setup>
  import { usePage } from '@inertiajs/vue3'

  const page = usePage();
</script>