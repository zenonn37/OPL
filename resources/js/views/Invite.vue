<template>
  <div>
    <v-layout>
      <v-flex>
        <h1>Invite Friends to Your League</h1>
      </v-flex>
    </v-layout>

    <v-layout>
      <v-flex>
        <form @submit.prevent="onInvite">
          <v-text-field
            type="email"
            label="Email"
            outline
            v-model.trim="form.email"
            prepend-inner-icon="mail"
          ></v-text-field>
          <v-text-field
            type="text"
            label="FullName"
            outline
            v-model.trim="form.name"
            prepend-inner-icon="account_circle"
          ></v-text-field>

          <v-btn type="submit" color="primary">Send Invite</v-btn>
        </form>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: "",
        name: ""
      }
    };
  },
  methods: {
    onInvite() {
      console.log("test form");

      this.$store.dispatch("NEW_INVITE", this.form).then(() => {
        console.log("good");
      });
    }
  }
};
</script>

<style>
</style>
