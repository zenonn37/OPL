import axios from "axios";

const state = {
    roster: [],
    errors: []
};

const mutations = {
    SET_ROSTER(state, payload) {
        state.roster = payload;
    },
    SET_LEAGUE_ERRORS(state, payload) {
        state.errors = payload;
    }
};

const getters = {
    GET_ROSTER(state) {
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
                .get(`api/profile/${league_id}`)
                .then(res => {
                    resolve(res);
                    commit("SET_ROSTER", res.data.data);
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
