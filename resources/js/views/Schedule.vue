<template>
  <div>
    <v-layout>
      <v-flex>
        <h1 class="display-1">Schedule</h1>
      </v-flex>
    </v-layout>

    <v-layout>
      <v-flex>
        <schedule-form></schedule-form>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
import ScheduleForm from "../components/ScheduleForm";
export default {
  components: {
    ScheduleForm
  }
};
</script>

<style>
</style>
