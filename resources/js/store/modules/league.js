import axios from "axios";

const state = {
    rosters: [],
    roster: "",
    errors: [],
    token: localStorage.getItem("token") || null
};

const mutations = {
    SET_ROSTER(state, payload) {
        state.rosters = payload;
    },
    SET_ONE_ROSTER(state, payload) {
        state.roster = payload;
    },
    SET_LEAGUE_ERRORS(state, payload) {
        state.errors = payload;
    }
};

const getters = {
    GET_ROSTER(state) {
        return state.rosters;
    },
    GET_ONE_ROSTER(state) {
        return state.roster;
    }
};

const actions = {
    GET_ALL_ROSTER({ commit }) {
        axios.defaults.headers.common["Authorization"] =
            "Bearer " + state.token;
        const league_id = localStorage.getItem("league_id");

        return new Promise((resolve, reject) => {
            axios
                .get(`api/profiles/${league_id}`)
                .then(res => {
                    resolve(res);
                    commit("SET_ROSTER", res.data.data);
                })
                .catch(errors => {
                    reject(errors);
                    commit("SET_LEAGUE_ERRORS", errors);
                });
        });
    },
    GET_ROSTER({ commit }, id) {
        console.log(id);

        axios.defaults.headers.common["Authorization"] =
            "Bearer " + state.token;

        return new Promise((resolve, reject) => {
            axios
                .get(`http://opl.test/api/profile/${id}`)
                .then(res => {
                    resolve(res);
                    console.log(res);

                    commit("SET_ONE_ROSTER", res.data.data);
                })
                .catch(errors => {
                    reject(errors);
                    commit("SET_LEAGUE_ERRORS", errors);
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
