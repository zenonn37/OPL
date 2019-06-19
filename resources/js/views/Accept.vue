<template>
  <h1>Accept {{$route.params.token}}</h1>
</template>

<script>
import axios from "axios";
export default {
  created() {
    axios.post("/api/process").then(res => {
      console.log(res.data);
    });
  }
};
</script>

<style>
</style>
