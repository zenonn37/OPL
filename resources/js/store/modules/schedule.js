import axios from "axios";

const state = {
    schedules: [],
    errors: "",
    links: "",
    meta: ""
};

const mutations = {
    SET_SCHEDULE(state, schedules) {
        state.schedules = schedules;
    },
    SET_LINKS(state, links) {
        state.links = links;
    },
    SET_META(state, meta) {
        state.meta = meta;
    },

    SET_ERRORS(state, error) {
        state.errors = error;
    }
};

const getters = {
    GET_SCHEDULE(state) {
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
    GET_SCHEDULE({ commit }) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("token");
        return new Promise((resolve, reject) => {
            axios
                .get("api/schedules")
                .then(res => {
                    resolve(res);
                    const data = res.data.data;
                    const links = res.data.links;
                    const meta = res.data.meta;
                    // console.log(res.data.links);
                    // console.log(res.data.meta);

                    commit("SET_SCHEDULE", data);
                    commit("SET_LINKS", links);
                    commit("SET_META", meta);
                })
                .catch(err => {
                    reject(err);
                    commit("SCHEDULE_ERRORS", err);
                });
        });
    },
    LoadSchedules({ commit }, page) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + localStorage.getItem("token");
        return new Promise((resolve, reject) => {
            axios
                .get("api/schedules?page=" + page)
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
