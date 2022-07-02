<template>
  <div class="md:fixed">
    <div class="md:block flex justify-center items-center">
      <img
          src="https://pbs.twimg.com/profile_images/1532665987312635905/rcYqlSA1_400x400.jpg"
          loading="lazy"
          alt="me"
          class="shadow-xl md:h-60 md:w-60 h-40 w-40 rounded-full"
      />
      <div class="mb-2 mx-7 mt-4 justify-center items-center">
        <h1
            class="md:text-3xl text-2xl text-gray-800 font-bold dark:text-blue-100"
        >
          Artur Serdiuk
        </h1>
        <div class="md:text-lg text-gray-600 dark:text-blue-100">
          Senior Backend Developer
        </div>
        <a
            href="`mailto:agelios765@gmail.com`"
            class="text-gray-600 md:hidden mt-1 dark:text-blue-100"
        >
          agelios765@gmail.com
        </a>
      </div>
    </div>

<!--    <div class="mx-7 hidden md:block">-->
<!--      <div class="my-2 text-gray-600 flex dark:text-blue-100">-->
<!--        <Mail />-->
<!--        <a :href="`mailto:${siteMetadata.email}`"> {{ siteMetadata.email }}</a>-->
<!--      </div>-->
<!--      <div class="my-2 text-gray-600 flex dark:text-blue-100">-->
<!--        <Glob />-->
<!--        <p>{{ siteMetadata.location }}</p>-->
<!--      </div>-->
<!--      <div class="my-2 text-gray-600 flex dark:text-blue-200">-->
<!--        <Github />-->
<!--        <a :href="siteMetadata.github"> {{ siteMetadata.githubUser }}</a>-->
<!--      </div>-->
<!--    </div>-->
  </div>
</template>


<script>
export default {
  name: "PersonalCard"
}
</script>

<style scoped>

</style>