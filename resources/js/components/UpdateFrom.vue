<template>
  <form @submit.prevent="onSubmit">
    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team1"
            v-model="picks.team1"
            color="blue"
            disabled
            :value="picks.team1"
            true-value="true"
          ></v-checkbox>
          <h4 class="headers">(Current Selection)</h4>
        </v-flex>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team1"
            v-model=" update.team1"
            color="blue"
            :value="picks.team1"
            true-value="true"
            @change="current(picks.team1)"
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md3>
          <v-checkbox
            :label="picks.losing1"
            color="red"
            v-model="update.team1"
            :value="picks.losing1"
            @change="current(picks.losing1)"
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md1>
          <h4 class="headers mt-3">(Fav):{{picks.favorite1}}</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field
            class="mt-2"
            type="number"
            v-model.trim="update.spread1"
            :value="picks.spread1"
            label="Spread"
            outline
          ></v-text-field>
        </v-flex>
      </v-layout>
    </div>

    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team2"
            v-model="picks.team2"
            color="blue"
            disabled
            :value="picks.team2"
            true-value="true"
          ></v-checkbox>
          <h4 class="headers">(Current Selection)</h4>
        </v-flex>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team2"
            v-model="update.team2"
            color="blue"
            :value="picks.team2"
            true-value="true"
            @change="current(picks.team2)"
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md3>
          <v-checkbox
            :label="picks.losing2"
            color="red"
            v-model=" update.team2"
            :value="picks.losing2"
            @change="current(picks.losing2)"
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md1>
          <h4 class="headers mt-3">(Fav):{{picks.favorite2}}</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field
            class="mt-2"
            type="number"
            v-model.trim="update.spread2"
            :value="picks.spread2"
            label="Spread"
            outline
          ></v-text-field>
        </v-flex>
      </v-layout>
    </div>

    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team3"
            v-model="picks.team3"
            color="blue"
            disabled
            :value="picks.team3"
            true-value="true"
          ></v-checkbox>
          <h4 class="headers">(Current Selection)</h4>
        </v-flex>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team3"
            v-model="update.team3"
            color="blue"
            :value="picks.team3"
            true-value="true"
            @change="current(picks.team3)"
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md3>
          <v-checkbox
            :label="picks.losing3"
            color="red"
            v-model=" update.team3"
            :value="picks.losing3"
            @change="current(picks.losing3)"
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md1>
          <h4 class="headers mt-3">(Fav):{{picks.favorite3}}</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field
            class="mt-2"
            type="number"
            v-model.trim="update.spread3"
            :value="picks.spread3"
            label="Spread"
            outline
          ></v-text-field>
        </v-flex>
      </v-layout>
    </div>

    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team4"
            v-model="picks.team4"
            color="blue"
            disabled
            :value="picks.team4"
            true-value="true"
          ></v-checkbox>
          <h4 class="headers">(Current Selection)</h4>
        </v-flex>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team4"
            v-model="update.team4"
            color="blue"
            :value="picks.team4"
            true-value="true"
            @change="current(picks.team4)"
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md3>
          <v-checkbox
            :label="picks.losing4"
            color="red"
            v-model=" update.team4"
            :value="picks.losing4"
            @change="current(picks.losing4)"
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md1>
          <h4 class="headers mt-3">(Fav):{{picks.favorite4}}</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field
            class="mt-2"
            type="number"
            v-model.trim="update.spread4"
            :value="picks.spread4"
            label="Spread"
            outline
          ></v-text-field>
        </v-flex>
      </v-layout>
    </div>

    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team5"
            v-model="picks.team5"
            color="blue"
            disabled
            :value="picks.team5"
            true-value="true"
          ></v-checkbox>
          <h4 class="headers">(Current Selection)</h4>
        </v-flex>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team5"
            v-model="update.team5"
            color="blue"
            :value="picks.team5"
            true-value="true"
            @change="current(picks.team5)"
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md3>
          <v-checkbox
            :label="picks.losing5"
            color="red"
            v-model=" update.team5"
            :value="picks.losing5"
            @change="current(picks.losing5)"
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md1>
          <h4 class="headers mt-3">(Fav):{{picks.favorite5}}</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field
            class="mt-2"
            type="number"
            v-model.trim="update.spread5"
            :value="picks.spread5"
            label="Spread"
            outline
          ></v-text-field>
        </v-flex>
      </v-layout>
    </div>
    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team6"
            v-model="picks.team6"
            color="blue"
            disabled
            :value="picks.team6"
            true-value="true"
          ></v-checkbox>
          <h4 class="headers">(Current Selection)</h4>
        </v-flex>
        <v-flex xs11 md3 class="pa-right">
          <v-checkbox
            checked
            :label="picks.team6"
            v-model="update.team6"
            color="blue"
            :value="picks.team6"
            true-value="true"
            @change="current(picks.team6)"
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md3>
          <v-checkbox
            :label="picks.losing6"
            color="red"
            v-model="update.team6"
            :value="picks.losing6"
            @change="current(picks.losing6)"
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md1>
          <h4 class="headers mt-3">(Fav):{{picks.favorite6}}</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field
            class="mt-2"
            type="number"
            v-model.trim="update.spread6"
            :value="picks.spread6"
            label="Spread"
            outline
          ></v-text-field>
        </v-flex>
      </v-layout>
    </div>

    <v-layout class="mt-3">
      <v-flex>
        <v-btn type="submit" color="info" large>Update</v-btn>
      </v-flex>
    </v-layout>
  </form>
</template>

<script>
export default {
  props: ["picks"],

  data() {
    return {
      update: {
        team1: this.picks.team1,
        team2: this.picks.team2,
        team3: this.picks.team3,
        team4: this.picks.team4,
        team5: this.picks.team5,
        team6: this.picks.team4,
        spread1: this.picks.spread1,
        spread2: this.picks.spread2,
        spread3: this.picks.spread3,
        spread4: this.picks.spread4,
        spread5: this.picks.spread5,
        spread6: this.picks.spread46,
        losing1: this.picks.losing1,
        losing2: this.picks.losing2,
        losing3: this.picks.losing3,
        losing4: this.picks.losing4,
        losing5: this.picks.losing5,
        losing6: this.picks.losing6
      }
    };
  },

  methods: {
    onSubmit() {
      console.log(this.update);
    },
    current(team) {
      switch (team) {
        case this.picks.team1:
          console.log("pick not change");
          this.update.team1 = this.update.losing1;
          this.update.losing1 = this.picks.losing1;

          break;

        case this.update.losing1:
          console.log("pick changed");
          this.update.team1 = this.update.losing1;
          this.update.losing1 = this.picks.team1;

          break;

        case this.picks.team2:
          console.log("pick not change");
          this.update.team2 = this.update.losing2;
          this.update.losing2 = this.picks.losing2;

          break;

        case this.update.losing2:
          console.log("pick changed");
          this.update.team2 = this.update.losing2;
          this.update.losing2 = this.picks.team2;

          break;

        case this.picks.team3:
          console.log("pick not change");
          this.update.team3 = this.update.losing3;
          this.update.losing3 = this.picks.losing3;

          break;

        case this.update.losing3:
          console.log("pick changed");
          this.update.team3 = this.update.losing3;
          this.update.losing3 = this.picks.team3;

          break;

        case this.picks.team4:
          console.log("pick not change");
          this.update.team4 = this.update.losing4;
          this.update.losing4 = this.picks.losing4;

          break;

        case this.update.losing4:
          console.log("pick changed");
          this.update.team4 = this.update.losing4;
          this.update.losing4 = this.picks.team4;

          break;
        case this.picks.team5:
          console.log("pick not change");
          this.update.team5 = this.update.losing5;
          this.update.losing5 = this.picks.losing5;

          break;

        case this.update.losing5:
          console.log("pick changed");
          this.update.team5 = this.update.losing5;
          this.update.losing5 = this.picks.team5;

          break;

        case this.picks.team6:
          console.log("pick not change");
          this.update.team6 = this.update.losing6;
          this.update.losing6 = this.picks.losing6;

          break;

        case this.update.losing6:
          console.log("pick changed");
          this.update.team6 = this.update.losing6;
          this.update.losing6 = this.picks.team6;

          break;

        default:
          break;
      }
      console.log(this.update);
    }
  }
};
</script>

<style>
</style>
