<script setup>
import { ref, onMounted } from 'vue'

const message = ref('Loading...')
const result = ref()
const name = ref('Рататуй')

onMounted(async () => {
  const res = await fetch('http://127.0.0.1:8000/api/drinks')
  const data = await res.json()
  console.log(data.data)
  result.value = data.data
  message.value = data.message
})
</script>

<template>
  <h1>{{ message ?? result[0].name }}</h1>
</template>

<style scoped></style>
