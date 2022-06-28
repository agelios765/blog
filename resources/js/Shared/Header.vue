<template>
  <nav class="md:max-w`-6xl mx-auto sticky top-0 z-50">
    <div
        class="flex flex-wrap items-center justify-center px-10 md:py-4 py-2 overflow-hidden border-b border-gray-200 font-2xl sm:px-4 md:overflow-visible md:px-2"
    >
      <input class="menu-btn hidden" type="checkbox" id="menu-btn"/>
      <label
          class="menu-icon block cursor-pointer md:hidden px-2 relative select-none"
          for="menu-btn"
      >
        <span class="bg-grey-darkest flex items-center relative"></span>
      </label>
      <ul class="flex justify-center list-reset m-0 w-full md:w-auto">
        <li>
          <Link
              class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold text-lg md:text-2xl"
          >Home
          </Link>
          <Link
              class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold text-lg md:text-2xl"
          >Blog
          </Link>
        </li>
      </ul>
    </div>
  </nav>

</template>

<script>
export default {
  name: "Header"
}
</script>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>

</style>