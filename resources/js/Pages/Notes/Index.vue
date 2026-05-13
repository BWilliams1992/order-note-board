<template>
    <div>
      <h1 class="text-3xl font-bold text-center my-4 py-4">Notes</h1>
      <div class="flex flex-col overflow-x-auto">
        <CreateForm/>
        <h2 class="font-semibold text-lg">Notes listing:</h2>
        <FilterForm :submitRoute="'/'"> </FilterForm>
        <div v-if="notes" class="grid grid-cols-1 md:grid-cols-12 gap-2 md:gap-4">
          <NoteCard v-for="note in notes" :note="note"/>
        </div>
      </div>
    </div>
</template>

<script setup>
  import { usePage } from '@inertiajs/vue3';
  import CreateForm from '../../Components/Notes/CreateForm.vue';
  import NoteCard from '../../Components/Notes/NoteCard.vue';
  import FilterForm from '../../Components/Notes/FilterForm.vue';

  const page = usePage();

  const props = defineProps({
    notes: Object,
  })

</script>