<template>
  <div>
    <v-layout>
      <v-flex>
        <h1>Selection</h1>
        <div>
          <v-btn color="blue" fab small @click="editMode">
            <v-icon>edit</v-icon>
          </v-btn>
        </div>
      </v-flex>
    </v-layout>

    <template v-if="!edit">
      <div>
        <div v-if="selection">{{selection}}</div>
      </div>
    </template>

    <template v-else>
      <div>
        <h3>Update Selections</h3>
      </div>
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
  methods: {
    editMode() {
      this.edit = !this.edit;
    }
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
