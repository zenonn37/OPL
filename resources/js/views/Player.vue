<template>
  <div>
    <v-layout>
      <v-flex>
        <h2>Player: {{roster.name}}</h2>
        <h3>Team: {{roster.team}}</h3>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loading: false
    };
  },
  computed: {
    roster() {
      return this.$store.getters.GET_ONE_ROSTER;
    }
  },
  beforeMount() {
    console.log("called");

    this.loading = true;
    this.$store.dispatch("GET_ROSTER", this.$route.params.id).then(() => {
      this.loading = false;
    });
  }
};
</script>

<style>
</style>
