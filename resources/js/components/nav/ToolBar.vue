<template>
  <div>
    <template v-if="!isLogged">
      <auth-bar></auth-bar>
    </template>

    <template v-else>
      <user-bar></user-bar>
    </template>
  </div>
</template>

<script>
import AuthBar from "./AuthBar";
import UserBar from "./UserBar";
export default {
  components: {
    AuthBar,
    UserBar
  },
  computed: {
    isLogged() {
      return this.$store.getters.GET_AUTH;

      //   if (localStorage.getItem("token") !== undefined) {
      //     return true;
      //   } else {
      //     return false;
      //   }
    }
  }
};
</script>

<style>
</style>
