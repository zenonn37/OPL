<template>
  <v-toolbar flat dark color="blue darken-5">
    <v-toolbar-title>OPL</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items>
      <v-btn to="/login" flat>
        <v-icon>lock_open</v-icon>
      </v-btn>
      <v-btn to="/register" flat>
        <v-icon>account_circle</v-icon>
      </v-btn>
      <v-btn to="/about" flat>
        <v-icon>info</v-icon>
      </v-btn>
    </v-toolbar-items>
  </v-toolbar>
</template>

<script>
export default {};
</script>

<style>
</style>
