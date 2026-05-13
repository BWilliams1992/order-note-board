<template>

    <header>
    </header>

    <main class="flex mx-auto flex-col container">
      <div v-if="page.props.flash.success" class="messages bg-green-500 text-white">
        {{ page.props.flash.success }}
      </div>
            <div v-if="page.props.flash.error" class="messages border-red-600 border-y-2 border-x-8 px-8 my-2 py-2">
        {{ page.props.flash.error }}
      </div>
      <div class="mx-auto container">
        <slot>

        </slot>
      </div>
    </main>

</template>

<script setup>
  import { usePage } from '@inertiajs/vue3'
  import MainNavigation from '../Components/MainNavigation.vue';

  const page = usePage();
</script>