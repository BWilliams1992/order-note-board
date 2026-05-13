<template>
    <div>
      <h1 class="text-3xl font-bold text-center my-4 py-4">Notes</h1>
      <div class="flex flex-col overflow-x-auto">
        <CreateForm/>
        <h2 class="font-semibold text-lg">Notes listing:</h2>
        <div v-if="notes">
          <div v-for="note in notes">
            <NoteCard :note="note"/>
          </div>
        </div>
      </div>
    </div>
</template>

<script setup>
  import { usePage } from '@inertiajs/vue3';
  import CreateForm from '../../Components/Notes/CreateForm.vue';
import NoteCard from '../../Components/Notes/NoteCard.vue';

  const page = usePage();

  defineProps({
    notes: Object,
  })

</script>