<template>
  <div>
    <v-layout>
      <v-flex>
        <h1>Accept League Invitation</h1>
      </v-flex>
    </v-layout>

    <v-layout>
      <v-flex>
        <form @submit.prevent="onAccept">
          <v-text-field
            type="text"
            label="Team Name"
            outline
            v-model.trim="form.team"
            prepend-inner-icon="star"
          ></v-text-field>
          <v-text-field
            type="password"
            label="Password"
            outline
            v-model.trim="form.password"
            prepend-inner-icon="lock"
          ></v-text-field>

          <v-btn type="submit" color="primary">Join</v-btn>
        </form>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      form: {
        password: "",
        team: "",
        token: this.$route.params.token
      }
    };
  },

  methods: {
    onAccept() {
      this.$store.dispatch("REGISTER_INVITED", this.form).then(() => {
        this.$router.push("/login");
      });
    }
  },
  created() {}
};
</script>

<style>
</style>
