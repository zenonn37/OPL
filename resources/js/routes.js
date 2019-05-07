import NotFound from "./views/NotFound";
import Home from "./views/Home";

export default {
    mode: "history",

    routes: [{ path: "*", component: NotFound }, { path: "/", component: Home }]
};
