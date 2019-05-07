<template>
  <div>
    <v-layout>
      <v-flex>
        <h1>Teams</h1>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
export default {
  created() {
    axios
      .get("api/teams")
      .then(res => {
        console.log(res.data);
      })
      .catch(err => {
        console.log(err);
      });
  }
};
</script>

<style>
</style>
