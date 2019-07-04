<template>
  <div>
    <template v-show="!edit">
      <div>
        <h1>Selection</h1>
        <div v-if="selection">{{selection}}</div>
      </div>
    </template>

    <template v-show="edit">
      <div>Update Selections</div>
    </template>
  </div>
</template>

<script>
export default {
  data() {
    return {
      edit: false
    };
  },
  beforeMount() {
    this.$store.dispatch("SHOW_SELECTIONS", this.$route.params.id);
  },
  computed: {
    selection() {
      const selections = this.$store.getters.GET_PICK;

      console.log(selections);

      return selections;
    }
  }
};
</script>

<style>
</style>
