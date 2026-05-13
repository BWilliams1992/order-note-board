<template>
  <form @submit.prevent="filter" class="my-2 flex flex-col md:flex-row gap-2 items-center">
    <div class="inline-flex gap-2">
      <label for="order_number">Order number</label>
      <input class="border border-black" v-model="filterForm.order_number" name="order_number">
    </div>
    <div class="inline-flex gap-2">
      <input type="submit" class="py-1 px-2 rounded border-black border bg-gray-400" value="Apply"/>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

  const props = defineProps({
    submitRoute: String,
  });

  const filterForm = useForm({
    'order_number': props.sortBy ?? '',
  });

  const filter = () => {
    filterForm.get(
        props.submitRoute,{
        preserveState: true,
        preserveScroll: true,
      }
    );
  };


</script>