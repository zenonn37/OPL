<template>
  <form @submit.prevent="onSubmit">
    <v-text-field type="text" label="Week" v-model.trim="week"></v-text-field>
    <v-text-field type="number" label="Number of Games" v-model.trim="games"></v-text-field>

    <v-menu
      ref="menu"
      v-model="menu"
      :close-on-content-click="false"
      :nudge-right="40"
      :return-value.sync="date"
      lazy
      transition="scale-transition"
      offset-y
      full-width
      min-width="290px"
    >
      <template v-slot:activator="{ on }">
        <v-text-field v-model="date" label="Date of Games" prepend-icon="event" readonly v-on="on"></v-text-field>
      </template>

      <v-date-picker v-model="date" no-title scrollable>
        <v-spacer></v-spacer>
        <v-btn flat color="primary" @click="menu = false">Cancel</v-btn>
        <v-btn flat color="primary" @click="$refs.menu.save(date)">OK</v-btn>
      </v-date-picker>
    </v-menu>

    <v-btn type="submit" outline large color="primary">Create New Schedule</v-btn>
  </form>
</template>

<script>
export default {
  data: () => ({
    week: null,
    games: "",
    date: new Date().toISOString().substr(0, 10),
    menu: false
  })
};
</script>

<style>
</style>
