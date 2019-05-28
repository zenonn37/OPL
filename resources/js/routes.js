import NotFound from "./views/NotFound";
import Home from "./views/Home";
import About from "./views/About";
import Contact from "./views/Contact";
import Team from "./views/Team";
import Schedule from "./views/Schedule";
import Login from "./views/Login";
import Register from "./views/Register";

export default {
    mode: "history",

    routes: [
        { path: "*", component: NotFound },
        { path: "/", component: Home, name: "home" },
        { path: "/about", component: About, name: "about" },
        { path: "/contact", component: Contact, name: "contact" },
        { path: "/teams", component: Team, name: "team" },
        { path: "/schedule", component: Schedule, name: "schedule" },
        { path: "/login", component: Login, name: "login" },
        { path: "/register", component: Register, name: "register" }
    ]
};
