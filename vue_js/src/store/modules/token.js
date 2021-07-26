import axios from "axios";

const state = {
    user_token: [],
    apprenant_id: [],
}

const getters = {
    user_token: state => state.user_token,
    apprenant_id: state => state.apprenant_id,
}


const actions = {
    async authent({ commit }, param) {
        const response = await axios.post(`http://127.0.0.1:8000/api/personne/login`, {
            email: param[0],
            password: param[1],
        }, {
            headers: {
                Accept: "application/json",
            }

        });
        console.log(response.data)
        localStorage.setItem("user_token", response.data.token)
        localStorage.setItem("user_id", response.data.apprenant_id)
        localStorage.setItem("personne_id", response.data.id_personne)

        commit('setToken', response.data);
        location.replace("/user/profile")
    },
}

const mutations = {
    setToken: function (state, user) {
        state.user_token = user.token
        state.apprenant_id = user.apprenant_id
    }

}

export default {
    state,
    getters,
    actions,
    mutations
}



