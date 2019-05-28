<template>
  <v-toolbar flat dark color="teal darken-2">
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>OPL</v-toolbar-title>
    <v-spacer></v-spacer>

    <v-toolbar-items class="hidden-sm-and-down">
      <v-btn to="/" flat>Home</v-btn>
      <v-btn to="/teams" flat>Teams</v-btn>
      <v-btn to="/schedule" flat>Schedule</v-btn>
      <v-btn to="/about" flat>About</v-btn>
      <v-btn to="/contact" flat>Contact</v-btn>
      <v-btn @click="onLogout" flat>Logout</v-btn>

      <!-- <v-btn to="/login" flat>Login</v-btn>
      <v-btn to="/register" flat>register</v-btn>-->
    </v-toolbar-items>
  </v-toolbar>
</template>

<script>
export default {
  methods: {
    onLogout() {
      this.$store.dispatch("LOGOUT").then(() => {
        this.$router.push("/login");
        localStorage.removeItem("token");
      });
    }
  }
};
</script>

<style>
</style>
