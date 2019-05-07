import NotFound from "./views/NotFound";
import Home from "./views/Home";
import About from "./views/About";
import Contact from "./views/Contact";
import Team from "./views/Team";

export default {
    mode: "history",

    routes: [
        { path: "*", component: NotFound },
        { path: "/", component: Home },
        { path: "/about", component: About },
        { path: "/contact", component: Contact },
        { path: "/teams", component: Team }
    ]
};
