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
const router = new VueRouter(routes);

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!store.getters.isLogged) {
            console.log("not logged");

            next({
                name: "login"
            });
        } else {
            next();
        }
    } else if (to.matched.some(record => record.meta.requiresVisitor)) {
        if (store.getters.isLogged) {
            console.log("not logged");

            next({
                name: "home"
            });
        } else {
            next();
        }
    } else {
        next();
    }
});

let app = new Vue({
    router,
    store
}).$mount("#app");
