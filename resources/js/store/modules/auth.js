import axios from "axios";

const state = {
    user: null,
    token: localStorage.getItem("token") || null,
    errors: ""
};

const mutations = {
    SET_AUTH(state, token) {
        state.token = token;
    },
    SET_USER(state, user) {
        state.user = user;
    },
    CLEAR_AUTH(state) {
        state.user = null;
        state.token = null;
    },
    AUTH_ERRORS(state, error) {
        state.errors = error;
    }
};

const getters = {
    GET_AUTH(state) {
        return state.token;
    },
    GET_USER(state) {
        return state.user;
    },
    GET_ERRORS(state) {
        return state.errors;
    },
    isLogged(state) {
        return state.token !== null;
    }
};

const actions = {
    LOGIN({ commit }, credentials) {
        return new Promise((resolve, reject) => {
            axios
                .post("api/login", {
                    username: credentials.username,
                    password: credentials.password
                })
                .then(res => {
                    resolve(res);
                    commit("SET_AUTH", res.data.access_token);
                    localStorage.setItem("token", res.data.access_token);
                })
                .catch(err => {
                    reject(err);
                    commit("AUTH_ERRORS", err);
                });
        });
    },
    REGISTER({ commit }, credentials) {
        return new Promise((resolve, reject) => {
            axios
                .post("api/register", {
                    name: credentials.name,
                    email: credentials.email,
                    password: credentials.password
                })
                .then(res => {
                    resolve(res);
                })
                .catch(err => {
                    reject(err);
                    commit("AUTH_ERRORS", err);
                });
        });
    },
    LOGOUT({ commit, state }) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + state.token;
        return new Promise((resolve, reject) => {
            axios
                .post("api/logout")

                .then(res => {
                    resolve(res);
                    commit("CLEAR_AUTH");
                })
                .catch(err => {
                    reject(err);
                    commit("CLEAR_AUTH");
                    commit("AUTH_ERRORS", err);
                });
        });
    }
};

export default {
    state,
    getters,
    mutations,
    actions
};
