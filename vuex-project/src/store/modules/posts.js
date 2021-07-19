import axios from "axios";

const state = {
    postsProfile: []
}

const getters = {
    posts_personne: state => state.postsProfile
}

const actions = {
    async fetchPosts({ commit }, token, id) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${token}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/apprenant/id/${id}`, config);

        commit('setPosts', response.data);
    },
}

const mutations = {
    setPosts: (state, postsProfile) => (state.postsProfile = postsProfile)
}

export default {
    state,
    getters,
    actions,
    mutations
}