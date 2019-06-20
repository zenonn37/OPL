



<template>
  <div>
    <template v-if="loaded">
      <div>loading plz wait....</div>
    </template>

    <template v-else>
      <div>
        <v-layout>
          <v-flex>
            <h2 class="headers">{{league}}</h2>
          </v-flex>
        </v-layout>
        <v-layout>
          <v-flex>
            <ul>
              <li v-for="roster in roster" :key="roster.id">
                <router-link :to="`player/${roster.id}`">
                  <h2>{{roster.name}}</h2>
                </router-link>
                <h4>Record {{roster.wins}} - {{roster.loses}} - {{roster.ties}} | {{roster.points}}</h4>
              </li>
            </ul>
          </v-flex>
        </v-layout>
      </div>
    </template>
  </div>
</template>



  </div>

  
</template>
 

<script>
export default {
  data() {
    return {
      loaded: false,
      league: localStorage.getItem("league_name")
    };
  },
  computed: {
    roster() {
      return this.$store.getters.GET_ROSTER;
    }
  },

  created() {
    this.loaded = true;
    this.$store.dispatch("GET_ALL_ROSTER").then(() => {
      this.loaded = false;
    });
  }
};
</script>

<style>
</style>
