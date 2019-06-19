import axios from "axios";

const state = {
    invite: [],
    errors: [],
    token: ""
};

const mutations = {
    SET_INVITES(state, payload) {
        state.invite = payload;
    }
};

const getters = {
    GET_INVITES(state) {
        return state.invite;
    }
};

const actions = {
    ALL_INVITES({ commit }) {},
    NEW_INVITE({ commit }, payload) {
        console.log(payload);

        const league_id = localStorage.getItem("league_id");

        const invite = {
            name: payload.name,
            email: payload.email,
            league_id: league_id
        };

        axios.defaults.headers.common["Authorization"] =
            "Bearer " + state.token;

        return new Promise((resolve, reject) => {
            axios
                .post("api/invite", invite)
                .then(res => {
                    resolve(res);
                    commit("SET_INVITES", res.data.data);
                })
                .catch(err => {
                    commit("ERROR_INVITE", err.message);
                    reject(err);
                });
        });
    },
    UPDATE_INVITE({ commit }, payload) {},
    DELETE_INVITE({ commit }, payload) {}
};

export default {
    state,
    mutations,
    getters,
    actions
};
