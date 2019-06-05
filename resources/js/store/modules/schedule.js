import axios from "axios";

const state = {
    schedules: [],
    games: [],
    errors: "",
    links: "",
    meta: ""
};

const mutations = {
    SET_SCHEDULE(state, schedules) {
        state.schedules = schedules;
    },
    SET_GAMES(state, games) {
        state.schedules = games;
    },
    SET_LINKS(state, links) {
        state.links = links;
    },
    SET_META(state, meta) {
        state.meta = meta;
    },
    NEW_GAMES(state, games) {
        state.schedules = games;
    },

    SCHEDULE_ERRORS(state, error) {
        state.errors = error;
    }
};

const getters = {
    GET_SCHEDULE(state) {
        return state.schedules;
    },
    GET_GAMES(state) {
        return state.schedules;
    },
    GET_LINKS(state) {
        return state.links;
    },
    GET_META(state) {
        return state.meta;
    },
    SCHEDULE_ERRORS(state) {
        return state.errors;
    }
};

const actions = {
    NEW_GAME({ commit }, game) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("token");
        console.log(game);

        return new Promise((resolve, reject) => {
            axios
                .post("api/games", game)
                .then(res => {
                    resolve(res);
                    commit("NEW_GAMES", res.data.data);
                })
                .catch(err => {
                    reject(err);
                    commit("SCHEDULE_ERRORS", err);
                });
        });
    },
    NEW_SCHEDULE({ commit }, schedule) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("token");

        return new Promise((resolve, reject) => {
            axios
                .post("api/schedules", schedule)
                .then(res => {
                    resolve(res);
                    commit("NEW_GAMES", res.data.data);
                })
                .catch(err => {
                    reject(err);
                    commit("SCHEDULE_ERRORS", err);
                });
        });
    },

    GET_GAMES({ commit }) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("token");
        return new Promise((resolve, reject) => {
            axios
                .get("api/games")
                .then(res => {
                    resolve(res);
                    const data = res.data.data;
                    const links = res.data.links;
                    const meta = res.data.meta;
                    commit("SET_GAMES", data);
                    commit("SET_SCHEDULE", data);
                    commit("SET_LINKS", links);
                    commit("SET_META", meta);
                    console.log(data);
                    data.forEach(element => {
                        console.log(element.schedules);
                    });
                })
                .catch(err => {
                    reject(err);
                    commit("SCHEDULE_ERRORS", err);
                });
        });
        // GET_SCHEDULE({ commit }) {
        //     axios.defaults.headers.common["Authorization"] =
        //         "Bearer " + localStorage.getItem("token");
        //     return new Promise((resolve, reject) => {
        //         axios
        //             .get("api/schedules")
        //             .then(res => {
        //                 resolve(res);
        //                 const data = res.data.data;
        //                 const links = res.data.links;
        //                 const meta = res.data.meta;
        //                 // console.log(res.data.links);
        //                 // console.log(res.data.meta);

        //                 commit("SET_SCHEDULE", data);
        //                 commit("SET_LINKS", links);
        //                 commit("SET_META", meta);
        //             })
        //             .catch(err => {
        //                 reject(err);
        //                 commit("SCHEDULE_ERRORS", err);
        //             });
        //     });
    },
    LoadSchedules({ commit }, page) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("token");
        return new Promise((resolve, reject) => {
            axios
                .get("api/games?page=" + page)
                .then(res => {
                    resolve(res);
                    const data = res.data.data;

                    commit("SET_SCHEDULE", data);
                })
                .catch(err => {
                    reject(err);
                    commit("SCHEDULE_ERRORS", err);
                });
        });
    }
};

export default {
    state,
    mutations,
    getters,
    actions
};
