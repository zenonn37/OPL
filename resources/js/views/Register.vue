<template>
  <div>
    <v-layout column justify-center>
      <v-flex>
        <v-card>
          <div class="auth-card">
            <form @submit.prevent="onRegister">
              <v-text-field
                label="Name"
                v-model.trim="name"
                type="text"
                prepend-inner-icon="account_circle"
              ></v-text-field>
              <v-text-field
                label="Email"
                v-model.trim="email"
                type="email"
                prepend-inner-icon="email"
              ></v-text-field>
              <v-text-field
                aria-label="Password"
                label="Password"
                v-model.trim="password"
                type="password"
                prepend-inner-icon="lock"
              ></v-text-field>
              <v-btn type="submit" color="primary" large>Login</v-btn>
            </form>
          </div>
        </v-card>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      name: "",
      email: "",
      password: ""
    };
  },
  methods: {
    onRegister() {
      axios
        .post("api/register", {
          name: this.name,
          email: this.email,
          password: this.password
        })
        .then(res => {
          console.log(res.data);
          this.$router.push("/login");
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>

<style scoped>
.auth-card {
  padding: 30px;
}

.v-sheet {
  display: block;
  border-radius: 4px;
  position: relative;
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-card {
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14),
    0 1px 5px 0 rgba(0, 0, 0, 0.12);
  text-decoration: none;
}
</style>
