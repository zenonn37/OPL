<template>
  <div>
    <div v-for="team in test" :key="team.id">
      <form @submit.prevent="onSubmit">
        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team1"
              :label="team.home"
              color="orange"
              :value="team.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team1"
              :label="team.away"
              color="blue"
              :value="team.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team2"
              :label="team.home"
              color="orange"
              :value="team.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team2"
              :label="team.away"
              color="blue"
              :value="team.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team3"
              :label="team.home"
              color="orange"
              :value="team.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team3"
              :label="team.away"
              color="blue"
              :value="team.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team4"
              :label="team.home"
              color="orange"
              :value="team.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team4"
              :label="team.away"
              color="blue"
              :value="team.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout mt-3>
          <v-flex>
            <v-btn type="submit" color="primary" large outline>Complete</v-btn>
          </v-flex>
        </v-layout>
      </form>
      <br>
      <hr>
    </div>

    <!-- <hr>

    <div v-for="(team, index) in  nfl" :key="team.id">
      {{team.week}}
      <form @submit.prevent="onSubmit">
        <v-layout wrap row v-for="(game, index) in team.schedule" :key="index">
          <p>{{game.game1}}</p>
          <p>{{game.game2}}</p>
          <v-flex>
            <v-checkbox
              :v-model="`form.team ${index + 1}`"
              :label="`game.game${index + 1}.home`"
              color="orange"
              :value="`game.game${index + 1}.home`"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              :v-model="`form.team ${index + 2}`"
              :label="game.game1.away"
              color="blue"
              :value="`game.game${index + 2}.away`"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout mt-3>
          <v-flex>
            <v-btn type="submit" color="primary" large outline>Complete</v-btn>
          </v-flex>
        </v-layout>
      </form>
    </div>-->
    <div>
      <div v-for="(sch, index) in schedules" :key="sch.id">
        {{index}}
        {{newTeam(index)}}
        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="picks[index].team"
              :label="sch.home"
              color="orange"
              :value="sch.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="picks[index].team"
              :label="sch.away"
              color="blue"
              :value="sch.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      schedules: [
        {
          id: 1,
          home: "Giants",
          away: "Redskins",
          game: "1",
          favorite: "Giants",
          spread: "2",
          location: "New York",
          time: "2019-09-07"
        },
        {
          id: 2,
          home: "Tampa",
          away: "Falcons",
          game: "2",
          favorite: "Falcons",
          spread: "2",
          location: "Atlanta",
          time: "2019-09-07"
        },
        {
          id: 3,
          home: "Panthers",
          away: "Saints",
          game: "3",
          favorite: "Panthers",
          spread: "5",
          location: "New Orleans",
          time: "2019-09-07"
        },
        {
          id: 4,
          home: "Bills",
          away: "Pats",
          game: "4",
          favorite: "New England",
          spread: "7",
          location: "Pats",
          time: "2019-09-07"
        }
      ],
      picks: [],
      testing: [
        {
          id: 8,
          games: 16,
          week: "6",
          date: "2019-09-07",
          schedules: [
            {
              id: 1,
              home: "Giants",
              away: "Redskins",
              game: "1",
              favorite: "Giants",
              spread: "2",
              location: "New York",
              time: "2019-09-07"
            },
            {
              id: 2,
              home: "Tampa",
              away: "Falcons",
              game: "2",
              favorite: "Falcons",
              spread: "2",
              location: "Atlanta",
              time: "2019-09-07"
            }
          ]
        },
        {
          id: 9,
          games: 16,
          week: "6",
          date: "2019-09-07",
          schedules: [
            {
              id: 2,
              home: "Tampa",
              away: "Falcons",
              game: "2",
              favorite: "Falcons",
              spread: "2",
              location: "Atlanta",
              time: "2019-09-07"
            }
          ]
        }
      ],
      test: [
        {
          id: 1,
          home: "Giants",
          away: "Redskins",
          game: "1",
          favorite: "Giants",
          spread: "2",
          location: "New York",
          time: "2019-09-07"
        },
        {
          id: 2,
          home: "Bucs",
          away: "Cowboys",
          game: "2",
          favorite: "Cowbuys",
          spread: "2",
          location: "Irving",
          time: "2019-09-07"
        },
        {
          id: 3,
          home: "Packers",
          away: "Lions",
          game: "3",
          favorite: "Packers",
          spread: "2",
          location: "Lions",
          time: "2019-09-07"
        },
        {
          id: 4,
          home: "Cards",
          away: "49ers",
          game: "4",
          favorite: "49ers",
          spread: "2",
          location: "New York",
          time: "2019-09-07"
        }
      ],
      games: [
        {
          id: 1,
          game1: {
            home: "Giants",
            away: "Bucs"
          },
          game2: {
            home: "Redskins",
            away: "Falcons"
          },
          game3: {
            home: "Seahawks",
            away: "Rams"
          },
          game4: {
            home: "Cowboys",
            away: "Eagles"
          },
          week: 1,
          date: new Date()
        },
        {
          id: 2,
          game1: {
            home: "Falcons",
            away: "Bucs"
          },
          game2: {
            home: "Redskins",
            away: "Giants"
          },
          game3: {
            home: "Seahawks",
            away: "49ers"
          },
          game4: {
            home: "Denver",
            away: "Eagles"
          },
          week: 2,
          date: new Date()
        }
      ],
      nfl: [
        {
          id: 1,
          week: 1,
          date: new Date(),
          schedule: [
            {
              game1: {
                home: "Giants",
                away: "Bucs",
                game: 1
              },
              game2: {
                home: "Eagles",
                away: "Bears",
                game: 2
              },
              game3: {
                home: "Dolphins",
                away: "Pats",
                game: 3
              },
              game4: {
                home: "Bills",
                away: "Raiders",
                game: 4
              }
            }
          ]
        }
      ],

      form: {
        team1: null,
        team2: null,
        team3: null,
        team4: null
      }
    };
  },
  methods: {
    onSubmit() {
      console.log(this.form);
    },
    newTeam(index) {
      console.log(index);
    }
  },
  created() {
    this.schedules.forEach(element => {
      console.log("called");
      this.picks.push({
        team: "",
        spread: ""
      });
    });
  }
};
</script>

<style>
</style>
