<template>
  <footer>
    <div class="flex flex-col items-center mt-16">
      <div class="flex mb-3 space-x-4">
        <a
            class="text-sm text-gray-500 transition hover:text-gray-600"
            target="_blank"
            rel="noopener noreferrer"
            href="#"
        ><span class="sr-only">github</span>
          <img class="w-8 h-8" src="/images/icons/github.svg"/> </a
        >
        <a
            class="text-sm text-gray-500 transition hover:text-gray-600"
            target="_blank"
            rel="noopener noreferrer"
            href="#"
        ><span class="sr-only">Linkedin</span>
          <img class="w-8 h-8" src="/images/icons/linkedin.svg"/> </a
        >
        <a
            class="text-sm text-gray-500 transition hover:text-gray-600"
            target="_blank"
            rel="noopener noreferrer"
            :href="`mailto:agelios765@gmail.com`"
        ><span class="sr-only">mail</span>
          <img class="w-8 h-8" src="/images/icons/mail.svg"/></a
        >
      </div>
      <div class="flex mb-2 space-x-2 text-sm text-gray-500 dark:text-gray-400">
        <div>Copyright © {{ new Date().getFullYear() }}</div>
        <div>•</div>
        <a href="/"
        >Agelios's blog</a
        >
      </div>
      <BuyMeACoffee></BuyMeACoffee>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<script setup>

import BuyMeACoffee from "./BuyMeACoffee";
</script>