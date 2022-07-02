<template>
  <nav class="md:max-w`-6xl mx-auto sticky top-0 z-50">
    <div
        class="flex flex-wrap items-center justify-between px-10 md:py-4 py-2 overflow-hidden border-b border-gray-200 font-2xl sm:px-4 md:overflow-visible md:px-2"
    >
      <ul></ul>
      <ul class="flex m list-reset m-0 w-full md:w-auto">
        <li>
          <Link
              class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold text-lg md:text-2xl"
          > {{ translations.about }}
          </Link>
          <Link
              class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold text-lg md:text-2xl"
          > {{ translations.blog }}
          </Link>
        </li>
      </ul>
      <ul class="flex">
        <li>
          <Link method="post" href="/language/ua"
              class="block md:inline-block px-1 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold"
          > UA
          </Link>
          <Link method="post" href="/language/en"
              class="block md:inline-block px-1 py-3 no-underline text-grey-darkest hover:text-grey-darker font-bold"
          > ENG
          </Link>
        </li>
      </ul>

    </div>
  </nav>

</template>

<script>

export default {
  name: "Header",
  props: ['translations']
}
</script>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>

</style>