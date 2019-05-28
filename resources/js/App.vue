<template>
  <v-app>
    <v-content>
      <tool-bar></tool-bar>
      <v-container>
        <router-view></router-view>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import ToolBar from "./components/nav/ToolBar";
export default {
  components: {
    ToolBar
  }
};
</script>

<style>
</style>
