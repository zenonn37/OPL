<template>
  <div>
    <template v-if="!loaded">
      <div class="test">Loading please wait...</div>
    </template>
    <template v-else>
      <div>
        <h3 class="headers">Scheduled NFL Games {{game.games}}</h3>
        <h4>Week {{game.week}}</h4>
        <h4>Date {{game.date}}</h4>
        <form @submit.prevent="onSubmit">
          <div class="c-panel mt-2" v-for="(sch, index) in  schedule" :key="sch.id">
            <v-layout wrap row>
              <v-flex xs11 md4 class="pa-right">
                <v-checkbox
                  :label="sch.home"
                  color="orange"
                  :value="sch.home"
                  v-model="picks[index].team"
                  hide-details
                  @change="home(sch.home,sch.away,index,sch)"
                ></v-checkbox>
                <h4 class="headers">(HOME): {{sch.location}}</h4>
              </v-flex>

              <v-flex xs12 md4>
                <v-checkbox
                  :label="sch.away"
                  color="blue"
                  :value="sch.away"
                  v-model="picks[index].team"
                  hide-details
                  @change="away(sch.home,sch.away,index,sch)"
                ></v-checkbox>
                <h4 class="headers">(AWAY)</h4>
              </v-flex>
              <v-flex xs12 md2>
                <h4 class="headers mt-3">(Fav):</h4>
                {{sch.favorite}}
              </v-flex>
              <v-flex xs12 md2>
                <v-text-field
                  class="mt-2"
                  type="number"
                  label="Spread"
                  outline
                  v-model="picks[index].spread"
                ></v-text-field>
              </v-flex>
            </v-layout>
          </div>
          <v-layout class="mt-3">
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
    home(home, away, index, sch) {
      console.log(home);
      console.log(index);
      console.log(this.picks);

      this.picks[index].losing = away;
      this.picks[index].favorite = sch.favorite;
    },
    away(home, away, index, sch) {
      console.log(away);
      console.log(index);
      this.picks[index].losing = home;
      this.picks[index].favorite = sch.favorite;
      console.log(this.picks);
    },
    onSubmit() {
      // console.log(this.picks);
      console.log(this.schedule);

      //computed value
      const games = this.schedule.length;
      console.log(games);

      const game = this.schedule;
      let picks = "";

      switch (games) {
        case 16:
          console.log("16 games");

          picks = {
            team1: this.picks[0].team,
            spread1: this.picks[0].spread,
            losing1: this.picks[0].losing,
            favorite1: this.picks[0].favorite,
            team2: this.picks[1].team,
            spread2: this.picks[1].spread,
            losing2: this.picks[1].losing,
            favorite2: this.picks[1].favorite,
            team3: this.picks[2].team,
            spread3: this.picks[2].spread,
            losing3: this.picks[2].losing,
            favorite3: this.picks[2].favorite,
            team4: this.picks[3].team,
            spread4: this.picks[3].spread,
            losing4: this.picks[3].losing,
            favorite4: this.picks[3].favorite,
            team5: this.picks[4].team,
            spread5: this.picks[4].spread,
            losing5: this.picks[4].losing,
            favorite5: this.picks[4].favorite,
            team6: this.picks[5].team,
            spread6: this.picks[5].spread,
            losing6: this.picks[5].losing,
            favorite6: this.picks[5].favorite,
            team7: this.picks[6].team,
            spread7: this.picks[6].spread,
            losing7: this.picks[6].losing,
            favorite7: this.picks[6].favorite,
            team8: this.picks[7].team,
            spread8: this.picks[7].spread,
            losing8: this.picks[7].losing,
            favorite8: this.picks[7].favorite,
            team9: this.picks[8].team,
            spread9: this.picks[8].spread,
            losing9: this.picks[8].losing,
            favorite9: this.picks[8].favorite,
            team10: this.picks[9].team,
            spread10: this.picks[9].spread,
            losing10: this.picks[9].losing,
            favorite10: this.picks[9].favorite,
            team11: this.picks[10].team,
            spread11: this.picks[10].spread,
            losing11: this.picks[10].losing,
            favorite11: this.picks[10].favorite,
            team12: this.picks[11].team,
            spread12: this.picks[11].spread,
            losing12: this.picks[11].losing,
            favorite12: this.picks[11].favorite,
            team13: this.picks[12].team,
            spread13: this.picks[12].spread,
            losing13: this.picks[12].losing,
            favorite13: this.picks[12].favorite,
            team14: this.picks[13].team,
            spread14: this.picks[13].spread,
            losing14: this.picks[13].losing,
            favorite14: this.picks[13].favorite,
            team15: this.picks[14].team,
            spread15: this.picks[14].spread,
            losing15: this.picks[14].losing,
            favorite15: this.picks[14].favorite,
            team16: this.picks[15].team,
            spread16: this.picks[15].spread,
            losing16: this.picks[16].losing,
            favorite16: this.picks[16].favorite
          };

          break;
        case 15:
          picks = {
            team1: this.picks[0].team,
            spread1: this.picks[0].spread,
            team2: this.picks[1].team,
            spread2: this.picks[1].spread,
            team3: this.picks[2].team,
            spread3: this.picks[2].spread,
            team4: this.picks[3].team,
            spread4: this.picks[3].spread,
            team5: this.picks[4].team,
            spread5: this.picks[4].spread,
            team6: this.picks[5].team,
            spread6: this.picks[5].spread,
            team7: this.picks[6].team,
            spread7: this.picks[6].spread,
            team8: this.picks[7].team,
            spread8: this.picks[7].spread,
            team9: this.picks[8].team,
            spread9: this.picks[8].spread,
            team10: this.picks[9].team,
            spread10: this.picks[9].spread,
            team11: this.picks[10].team,
            spread11: this.picks[10].spread,
            team12: this.picks[11].team,
            spread12: this.picks[11].spread,
            team13: this.picks[12].team,
            spread13: this.picks[12].spread,
            team14: this.picks[13].team,
            spread14: this.picks[13].spread,
            team15: this.picks[14].team,
            spread15: this.picks[14].spread
          };

          break;

        case 14:
          picks = {
            team1: this.picks[0].team,
            spread1: this.picks[0].spread,
            team2: this.picks[1].team,
            spread2: this.picks[1].spread,
            team3: this.picks[2].team,
            spread3: this.picks[2].spread,
            team4: this.picks[3].team,
            spread4: this.picks[3].spread,
            team5: this.picks[4].team,
            spread5: this.picks[4].spread,
            team6: this.picks[5].team,
            spread6: this.picks[5].spread,
            team7: this.picks[6].team,
            spread7: this.picks[6].spread,
            team8: this.picks[7].team,
            spread8: this.picks[7].spread,
            team9: this.picks[8].team,
            spread9: this.picks[8].spread,
            team10: this.picks[9].team,
            spread10: this.picks[9].spread,
            team11: this.picks[10].team,
            spread11: this.picks[10].spread,
            team12: this.picks[11].team,
            spread12: this.picks[11].spread,
            team13: this.picks[12].team,
            spread13: this.picks[12].spread,
            team14: this.picks[13].team,
            spread14: this.picks[13].spread
          };

          break;

        case 13:
          picks = {
            team1: this.picks[0].team,
            spread1: this.picks[0].spread,
            team2: this.picks[1].team,
            spread2: this.picks[1].spread,
            team3: this.picks[2].team,
            spread3: this.picks[2].spread,
            team4: this.picks[3].team,
            spread4: this.picks[3].spread,
            team5: this.picks[4].team,
            spread5: this.picks[4].spread,
            team6: this.picks[5].team,
            spread6: this.picks[5].spread,
            team7: this.picks[6].team,
            spread7: this.picks[6].spread,
            team8: this.picks[7].team,
            spread8: this.picks[7].spread,
            team9: this.picks[8].team,
            spread9: this.picks[8].spread,
            team10: this.picks[9].team,
            spread10: this.picks[9].spread,
            team11: this.picks[10].team,
            spread11: this.picks[10].spread,
            team12: this.picks[11].team,
            spread12: this.picks[11].spread,
            team13: this.picks[12].team,
            spread13: this.picks[12].spread
          };

          break;

        default:
          console.log("none");

          break;
      }

      console.log(picks);

      // this.$store.dispatch("SEND_PICKS", picks).then(() => {
      //   this.$router.push("/");
      // });

      // axios
      //   .post("api/picks", picks)
      //   .then(res => {
      //     console.log(res.data.data);
      //   })
      //   .catch(err => {
      //     console.log(err);
      //   });
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
          losing: "",
          spread: "",
          favorite: ""
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
