import axios from "axios";

const state = {
    user_info: [],
    postsProfile: [],
    comments: []
}

const getters = {
    user_info: state => state.user_info,
    posts_personne: state => state.postsProfile,
    comments: state => state.comments
}

const actions = {
    async fetchUser({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[1]}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/apprenant/id/${param[0]}`, config);
        console.log(response)

        commit('setUser', response.data);
    },
    async fetchPosts({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[1]}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/profile/post/${param[0]}`, config);
        console.log(response)

        commit('setPosts', response.data);
    },
    async fetchComments({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[1]}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/personne/fullname/id/${param[0]}`, config);
        console.log(response)

        commit('setComments', response.data);
    },
    async postComment({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[3]}`
            }
        };
        var raw = JSON.stringify({
            personne_id: param[0],
            post_id: param[1],
            comment: param[2],
        });

        const response = await axios.POST(`http://127.0.0.1:8000/api/comment/store`, config, raw);
        console.log(response)

        commit('newComment', response.data);
    },
}

const mutations = {
    setUser: (state, user_info) => (state.user_info = user_info),
    setPosts: (state, postsProfile) => (state.postsProfile = postsProfile),
    setComments: (state, comments) => (state.comments = comments),
    newComment: (state, comments) => state.comments.unshift(comments),
}

export default {
    state,
    getters,
    actions,
    mutations
}