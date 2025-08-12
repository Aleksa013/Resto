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
  <h1 class="header">{{ message ?? result[0].name }}</h1>
  <img src="../public/images/logo.png" class="logo" />
</template>

<style lang="scss" scoped>
@use '../public/styles/main.scss' as styles;

.logo {
  width: 150px;
  height: 150px;
}

.header {
  color: styles.$accent-color;
}
</style>
