<template>
  <section class="w-full px-6 pb-12 antialiased">
    <div class="mx-auto max-w-8xl">
      <Header></Header>
      <div class="mt-16">
        <slot></slot>
      </div>
      <Footer></Footer>
    </div>
  </section>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";

export default {
  name: "Layout",
  components: {Footer, Header}
}
</script>