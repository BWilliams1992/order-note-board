<template>
  <div class="max-w-1/2 mx-auto">
    <h2 class="font-semibold text-xl my-2">Create new Note</h2>
    <form @submit.prevent="create" >
      <div class="flex justify-between gap-4">
        <label for="author">Author</label>
        <input v-model="form.author" class="border border-black rounded-sm" type="text" name="author" id="author">
        <span class="text-red-500" v-if="form.errors.author">{{ form.errors.author }}</span>
      </div>

      <div class="flex justify-between gap-4">
        <label for="order_number">Order Number</label>
        <input v-model="form.order_number" class="border border-black rounded-sm" type="text" name="order_number" id="order_number">
        <span class="text-red-500" v-if="form.errors.order_number">{{ form.errors.order_number }}</span>
      </div>

      <div class="flex justify-between gap-4">
        <label for="message">Message</label>
        <textarea v-model="form.message" name="message" id="message" class="border border-black rounded-sm"> </textarea>
        <span class="text-red-500" v-if="form.errors.message">{{ form.errors.message }}</span>
      </div>

      <div class="mb-4">
        <button class="py-1 px-3 border border-black rounded bg-gray-300" type="submit">Submit</button>
      </div>
    </form>
  </div>
</template>

<script setup>
  import { useForm } from '@inertiajs/vue3';

  const props = defineProps({

  })

  const form = useForm({
    message: null,
    author: null,
    order_number:null,
  })

  const create = () => {
    form.post('/api/notes');
    form.reset();
  }

</script>