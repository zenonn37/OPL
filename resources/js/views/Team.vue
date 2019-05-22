<template>
  <div>
    <v-layout>
      <v-flex>
        <h1>NFL Teams</h1>
        <div v-for="team in teams" :key="team.id">teams</div>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
export default {
  data() {
    return {
      teams: []
    };
  },
  created() {
    axios
      .get("api/teams")
      .then(res => {
        console.log(res.data);
        this.teams = res.data;
      })
      .catch(err => {
        console.log(err);
      });
  }
};
</script>

<style>
</style>
