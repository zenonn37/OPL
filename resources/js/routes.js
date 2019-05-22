import NotFound from "./views/NotFound";
import Home from "./views/Home";
import About from "./views/About";
import Contact from "./views/Contact";
import Team from "./views/Team";
import Schedule from "./views/Schedule";

export default {
    mode: "history",

    routes: [
        { path: "*", component: NotFound },
        { path: "/", component: Home },
        { path: "/about", component: About },
        { path: "/contact", component: Schedule },
        { path: "/teams", component: Team },
        { path: "/schedule", component: Schedule, name: "schedule" }
    ]
};
