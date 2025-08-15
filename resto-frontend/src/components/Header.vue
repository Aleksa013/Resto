<script setup lang="js">
import { ref } from 'vue'
import content from './../content/constants.json'

const menu = ref([])
const logoPath = ref('')
menu.value = content.menu
logoPath.value = content.logoPath
</script>
<template>
  <header class="container flex mx-auto my-10 px-10 justify-around items-center bg-base">
    <div class="logo basis-64">
      <a href="/">
        <img :src="logoPath" alt="alt" />
      </a>
    </div>
    <nav class="basis-128 mx-auto">
      <ul class="flex max-w-9xl items-center justify-evenly">
        <li v-for="(item, i) in menu" :key="i">
          <a
            :href="item"
            class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 hover:text-middle-size font-semibold text-my-text hover:text-accent px-4 py-2 duration-300 w-[30px]"
            >{{ item }}</a
          >
        </li>
      </ul>
    </nav>
    <span>
      <a
        href="cabinet"
        class="basis-64 text-my-text hover:text-base hover:bg-accent border rounded-full border-accent-second px-6 py-3 duration-300"
        >Login</a
      >
    </span>
  </header>
</template>
<style lang="scss"></style>
