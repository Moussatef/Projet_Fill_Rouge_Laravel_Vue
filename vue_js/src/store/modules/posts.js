import axios from "axios";

const state = {
    postsProfile: [],
}

const getters = {
    posts_personne: state => state.postsProfile,
}

const actions = {

    async fetchPosts({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[1]}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/profile/post/${param[0]}`, config);
        // console.log(response)

        commit('setPosts', response.data);
    },
}

const mutations = {
    setPosts: (state, postsProfile) => (state.postsProfile = postsProfile),
}

export default {
    state,
    getters,
    actions,
    mutations
}