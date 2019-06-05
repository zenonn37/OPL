<template>
  <div>
    <v-layout column>
      <v-flex>
        <h1 class="display-1">Create Weekly Schedule</h1>
      </v-flex>
    </v-layout>
    <v-layout>
      <v-flex>
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
              <v-text-field
                v-model="date"
                label="Date of Games"
                prepend-icon="event"
                readonly
                v-on="on"
              ></v-text-field>
            </template>

            <v-date-picker v-model="date" no-title scrollable>
              <v-spacer></v-spacer>
              <v-btn flat color="primary" @click="menu = false">Cancel</v-btn>
              <v-btn flat color="primary" @click="$refs.menu.save(date)">OK</v-btn>
            </v-date-picker>
          </v-menu>

          <v-btn type="submit" outline large color="primary">Create New Schedule</v-btn>
        </form>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
export default {
  data() {
    return {
      week: null,
      games: "",
      date: new Date().toISOString().substr(0, 10),
      menu: false
    };
  },
  methods: {
    onSubmit() {
      const game = {
        week: this.week,
        games: Number(this.games),
        date: this.date,
        league_id: 5
      };
      console.log(this.form);
      this.$store.dispatch("NEW_GAME", game).then(res => {
        console.log("done");
      });
    }
  }
};
</script>

<style>
</style>
