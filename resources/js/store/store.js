import Vue from "vue";
import Vuex from "vuex";
import auth from "./modules/auth";
import schedules from "./modules/schedule";

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        auth,
        schedules
    }
});
