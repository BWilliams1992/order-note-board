<template>
  <div>
    <div>
      Author: {{ note.author }}
    </div>
    <div>
      Order number:{{ note.order_number }}
    </div>
    <div>
      Message: {{ note.message }}
    </div>
  </div>
</template>

<script setup>
  const props = defineProps({
    note: Object,
  })
</script>