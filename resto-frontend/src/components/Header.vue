<script setup lang="js">
import { ref } from 'vue'
import content from './../content/constants.json'
import './../assets/styles/tailwind.css'

const menu = ref([])
const logoPath = ref('')
menu.value = content.menu
logoPath.value = content.logoPath
console.log(menu.value)
</script>
<template>
  <header class="flex mx-0 my-10">
    <div class="logo w-3">
      <img :src="logoPath" alt="alt" class="w-4" />
    </div>
    <div class="bg-red-500 w-10 h-10"></div>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
      <ul class="flex lg:flex-1">
        <li v-for="(item, i) in menu" :key="i">
          <a
            :href="item"
            class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-100"
            >{{ item }}</a
          >
        </li>
      </ul>
    </nav>
  </header>
</template>
<style lang="scss">
@import './../assets/styles/tailwind.css';
</style>
