import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import axios from "axios";
import Vuetify from "vuetify";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Vue.use(VueRouter);
Vue.use(Vuetify);

let app = new Vue({
    el: "#app",

    router: new VueRouter(routes)
});
