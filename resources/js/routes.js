import NotFound from "./views/NotFound";
import Home from "./views/Home";
import About from "./views/About";
import Contact from "./views/Contact";
import Team from "./views/Team";
import Schedule from "./views/Schedule";
import Login from "./views/Login";
import Register from "./views/Register";
import Game from "./components/admin/Game";
import League from "./views/League";
import Accept from "./views/Accept";
import Invite from "./views/Invite";

export default {
    mode: "history",

    routes: [
        { path: "*", component: NotFound },
        {
            path: "/",
            component: Home,
            name: "home",
            meta: {
                requiresAuth: true
            }
        },
        {
            path: "/about",
            component: About,
            name: "about"
        },
        {
            path: "/contact",
            component: Contact,
            name: "contact",
            meta: {
                requiresAuth: true
            }
        },
        { path: "/teams", component: Team, name: "team" },
        {
            path: "/schedule",
            component: Schedule,
            name: "schedule",
            meta: {
                requiresAuth: true
            }
        },
        {
            path: "/login",
            component: Login,
            name: "login",
            meta: {
                requiresVisitor: true
            }
        },

        {
            path: "/accept/:token",
            component: Accept,
            name: "accept",
            meta: {
                requiresVisitor: true
            }
        },
        {
            path: "/invite",
            component: Invite,
            name: "invite",
            meta: {
                requiresAuth: true
            }
        },
        {
            path: "/register",
            component: Register,
            name: "register",
            meta: {
                requiresVisitor: true
            }
        },

        {
            path: "/games",
            component: Game,
            name: "AdminSchedule",
            meta: {
                requiresAuth: true
            }
        },
        {
            path: "/league",
            component: League,
            name: "league",
            meta: {
                requiresAuth: true
            }
        }
    ]
};
