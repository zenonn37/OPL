<template>
  <div>
    <v-layout>
      <h1>Schedule Admin</h1>
    </v-layout>

    <v-layout v-for="(n,index) in game" :key="index">
      <v-flex>
        <h4>Game: {{index + 1}}</h4>
        <form @submit.prevent="onSubmit(index)">
          <v-text-field label="Home" v-model="teams[index].home" type="text"></v-text-field>
          <v-text-field label="Away" v-model="teams[index].away" type="text"></v-text-field>
          <v-text-field label="Favorite" v-model="teams[index].favorite" type="text"></v-text-field>
          <v-text-field label="Line" v-model="teams[index].spread" type="text"></v-text-field>
          <v-text-field label="Location" v-model="teams[index].location" type="text" value="tests"></v-text-field>
          <v-text-field label="Game Time" v-model="teams[index].time" type="text"></v-text-field>
          <v-text-field
            label="Game"
            disabled
            v-model="teams[index].game"
            :placeholder="String(index + 1)"
            type="text"
          ></v-text-field>

          <v-btn large color="primary" outline type="submit">New Game</v-btn>
        </form>
      </v-flex>
    </v-layout>
  </div>
</template>
</div>
<script>
export default {
  props: ["games"],
  data: () => ({
    teams: []
  }),
  computed: {
    game() {
      let counter = 0;
      let games = parseInt(this.games.data.games);
      console.log(games);

      while (counter < games) {
        console.log("hello");
        counter++;
        this.teams.push({
          home: "",
          away: "",
          favorite: "",
          spread: "",
          location: "",
          time: ""
        });
      }
      return games;
    }
  },
  methods: {
    onSubmit(index) {
      const game = {
        ...this.teams[index],
        game: String(index + 1)
      };

      this.$store.dispatch("NEW_SCHEDULE", game).then(res => {
        //this.$emit("done", false);

        console.log("done");
      });

      console.log(game);
    }
  }
};
</script>

<style>
</style>
