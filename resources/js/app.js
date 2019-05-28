import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import axios from "axios";
import Vuetify from "vuetify";
import { store } from "./store/store";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Vue.use(VueRouter);
Vue.use(Vuetify);
//Vue.component("app", require("./App.vue").default);
Vue.component("app", require("./App.vue").default);
let app = new Vue({
    router: new VueRouter(routes),
    store
}).$mount("#app");
