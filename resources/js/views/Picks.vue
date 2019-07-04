<template>
  <div>
    <h1>Selections</h1>

    <ul>
      <li v-for="sel in selections" :key="sel.id">
        <router-link :to="`/pick/${sel.id}`">
          <h4>{{sel.created_at}}</h4>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  computed: {
    selections() {
      const selection = this.$store.getters.GET_SELECTIONS;
      const count = selection.length;
      return selection;
    }
  },

  beforeMount() {
    this.$store.dispatch("GET_SELECTIONS");
  }
};
</script>

<style>
</style>
