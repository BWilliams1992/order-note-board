<template>
  <div class="col-span-1 md:col-span-4 border-2 border-black rounded p-2">
    <div>
      <span class="font-semibold">Author:</span> {{ note.author }}
    </div>
    <div>
      <span class="font-semibold">Order number:</span>{{ note.order_number }}
    </div>
    <div>
      <span class="font-semibold">Message:</span> {{ note.message }}
    </div>
    <div>
      <span class="font-semibold">Created at:</span> {{ note.created_at }}
    </div>
  </div>
</template>

<script setup>
  const props = defineProps({
    note: Object,
  })
</script>