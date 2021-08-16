import axios from "axios";

const state = {
    user_token: [],
    apprenant_id: [],
    err : [],
}

const getters = {
    user_token: state => state.user_token,
    apprenant_id: state => state.apprenant_id,
}

const actions = {
   
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



