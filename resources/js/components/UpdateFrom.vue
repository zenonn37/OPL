<template>
  <form @submit.prevent="onSubmit">
    <div class="c-panel mt-2">
      <v-layout wrap row>
        <v-flex xs11 md4 class="pa-right">
          <v-checkbox
            label="Team 1"
            color="orange"
            :value="week.game1.team1"
            v-model="team1"
            hide-details
          ></v-checkbox>
          <h4 class="headers">(HOME)</h4>
        </v-flex>

        <v-flex xs12 md4>
          <v-checkbox
            :label="sch.away"
            color="blue"
            :value="week.game1.team2"
            v-model="team1"
            hide-details
          ></v-checkbox>
          <h4 class="headers">(AWAY)</h4>
        </v-flex>
        <v-flex xs12 md2>
          <h4 class="headers mt-3">(Fav):</h4>
        </v-flex>
        <v-flex xs12 md2>
          <v-text-field class="mt-2" type="number" label="Spread" outline v-model="spread1"></v-text-field>
        </v-flex>
      </v-layout>
    </div>
    <v-layout class="mt-3">
      <v-flex>
        <v-btn type="submit" color="info" large>Complete</v-btn>
      </v-flex>
    </v-layout>
  </form>
</template>

<script>
export default {
  props: ["picks"],

data() {
    return {
        week = { 
            "id": 7, 
           game1 = {
        "team1": "Chicago", 
        "losing":"Green Bay",
        "spread":7
           },
        "team2": "Tennessee",
         "team3": "Baltimore", 
         "team4": "Atlanta", 
         "team5": "New York Jets",
          "team6": "Washington", 
          "team7": "Los Angeles",
           "team8": "Kansas City", 
           "team9": "Indianapolis",
            "team10": "Cincinnati", 
            "team11": "New York", 
            "team12": "Arizona", 
            "team13": "San Francisco",
             "team14": "Pittsburgh", 
             "team15": "Houston", 
             "team16": "Denver", 
             "spread1": 3, 
             "spread2": 5, 
             "spread3": 7, 
             "spread4": 6, 
             "spread5": 7,
              "spread6": 6, 
              "spread7": 8, 
              "spread8": 6, 
              "spread9": 7,
               "spread10": 7,
                "spread11": 7, 
                "spread12": 3, 
                "spread13": 2, 
                "spread14": 6, 
                "spread15": 6,
                "spread16": 8, 
                "created_at": 
                "2019-07-03T22:21:58.000000Z" }
    }
},

  methods: {
    onSubmit() {
      console.log("push");
    }
  }
};
</script>

<style>
</style>
