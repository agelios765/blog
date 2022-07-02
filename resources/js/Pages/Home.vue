<template>
  <div class="max-w-6xl mx-auto flex">
    <div class="flex w-1/3">
      <PersonalCard></PersonalCard>
    </div>
    <div class="w-2/3">
      <PersonalInfo></PersonalInfo>
    </div>
  </div>
</template>

<script>
import PersonalCard from "../Shared/PersonalCard";
import PersonalInfo from "../Shared/PersonalInfo";
export default {
  name: "Home",
  components: {PersonalInfo, PersonalCard}

}
</script>

<style scoped>

</style>