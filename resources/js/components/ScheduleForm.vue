<template>
  <div>
    <div v-for="team in games" :key="team.id">
      <form @submit.prevent="onSubmit">
        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team1"
              :label="team.game1.home"
              color="orange"
              :value="team.game1.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team1"
              :label="team.game1.away"
              color="blue"
              :value="team.game1.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team2"
              :label="team.game2.home"
              color="orange"
              :value="team.game2.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team2"
              :label="team.game2.away"
              color="blue"
              :value="team.game2.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team3"
              :label="team.game3.home"
              color="orange"
              :value="team.game3.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team3"
              :label="team.game3.away"
              color="blue"
              :value="team.game3.away"
              hide-details
            ></v-checkbox>
          </v-flex>
        </v-layout>

        <v-layout wrap row>
          <v-flex>
            <v-checkbox
              v-model="form.team4"
              :label="team.game4.home"
              color="orange"
              :value="team.game4.home"
              hide-details
            ></v-checkbox>
          </v-flex>

          <v-flex>
            <v-checkbox
              v-model="form.team4"
              :label="team.game4.away"
              color="blue"
              :value="team.game4.away"
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
  </div>
</template>

<script>
export default {
  data() {
    return {
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
    }
  }
};
</script>

<style>
</style>
