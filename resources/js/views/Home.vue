<template>
  <div>
    <h1>Profile</h1>
    <p v-if="profile">{{profile}}</p>
  </div>
</template>

<script>
export default {
  computed: {
    profile() {
      return this.$store.getters.GET_USER;
    }
  }
};
</script>

<style>
</style>
