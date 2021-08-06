import axios from "axios";

const state = {
    likes: [],
}

const getters = {
    likes: state => state.likes,
}

const actions = {

    async getLikePost({ commit }, param) {

        await axios.get(`http://127.0.0.1:8000/api/like/getInfo/${param[0]}`, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }
        }).then(res => {
            commit('setLikePost', res.data)
            // console.log(res)
        }).catch(err => console.log(err));
        // commit('newComment', response.data);
    },


   
}

const mutations = {

    setLikePost: (state, likes) =>
        (state.likes = likes),

    newLike: function (state, likes) {
        state.likes.unshift(likes)
    },
    removeLike: (state, id) =>
        (state.likes = state.likes.filter(like => like.id !== id)),
}

export default {
    state,
    getters,
    actions,
    mutations
}