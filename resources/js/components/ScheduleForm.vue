<template>
  <div>
    <template v-if="!loaded">
      <div>please wait...</div>
    </template>
    <template v-else>
      <div>
        <h3>Scheduled Games {{game.games}}</h3>
        <h4>Week {{game.week}}</h4>
        <h4>Date {{game.date}}</h4>
        <form @submit.prevent="onSubmit">
          <div v-for="(sch, index) in  schedule" :key="sch.id">
            <v-layout wrap row>
              <v-flex>
                <v-checkbox
                  :label="sch.home"
                  color="orange"
                  :value="sch.home"
                  v-model="picks[index].team"
                  hide-details
                ></v-checkbox>
              </v-flex>

              <v-flex>
                <v-checkbox
                  :label="sch.away"
                  color="blue"
                  :value="sch.away"
                  v-model="picks[index].team"
                  hide-details
                ></v-checkbox>
              </v-flex>
              <v-flex>
                <v-text-field type="number" label="Spread" outline v-model="picks[index].spread"></v-text-field>
              </v-flex>
            </v-layout>
          </div>
          <v-layout>
            <v-flex>
              <v-btn type="submit" color="info" large>Complete</v-btn>
            </v-flex>
          </v-layout>
        </form>
      </div>
    </template>

    <div class="text-xs-center">
      <v-pagination v-model="page" :length="meta.last_page" circle></v-pagination>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      page: 1,
      loaded: false,
      schedules: [],
      picks: []
    };
  },
  methods: {
    onSubmit() {
      console.log(this.picks);
      const games = this.schedule.length;
      let picks = "";
      switch (games) {
        case 4:
          picks = {
            team1: this.picks[0].team,
            spread1: this.picks[0].spread,
            team2: this.picks[1].team,
            spread2: this.picks[1].spread,
            team3: this.picks[2].team,
            spread3: this.picks[2].spread,
            team4: this.picks[3].team,
            spread4: this.picks[3].spread
          };

          break;

        default:
          console.log("none");

          break;
      }

      console.log(games);

      console.log(picks);

      axios
        .post("api/picks", picks)
        .then(res => {
          console.log(res.data.data);
        })
        .catch(err => {
          console.log(err);
        });
    },
    loadMore(value) {
      this.loaded = false;
      // console.log(value + "im called");
      this.$store.dispatch("LoadSchedules", value).then(res => {
        // console.log("loaded");
        this.loaded = true;
      });
    }
  },
  computed: {
    paginate() {
      let data = this.page;
      return data;
    },
    game() {
      const games = this.$store.getters.GET_SCHEDULE;

      let game;
      games.forEach(element => {
        game = element;
      });
      return game;
    },
    schedule() {
      const sch = this.$store.getters.GET_SCHEDULE;

      let game = "";

      sch.forEach(games => {
        game = games;
      });

      game.schedules.forEach(game => {
        this.picks.push({
          team: "",
          spread: ""
        });
      });

      return game.schedules;
    },
    links() {
      return this.$store.getters.GET_LINKS;
    },
    meta() {
      return this.$store.getters.GET_META;
    }
  },
  watch: {
    paginate(value) {
      // console.log(value);
      this.loadMore(value);
    }
  },
  created() {
    this.$store.dispatch("GET_GAMES").then(res => {
      this.loaded = true;
    });
  }
};
</script>

<style>
</style>
