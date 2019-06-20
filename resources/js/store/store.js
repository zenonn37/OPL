import Vue from "vue";
import Vuex from "vuex";
import auth from "./modules/auth";
import schedules from "./modules/schedule";
import invite from "./modules/invite";
import league from "./modules/league";

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        auth,
        schedules,
        invite,
        league
    }
});
