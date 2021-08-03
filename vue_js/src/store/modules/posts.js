import axios from "axios";

const state = {
    postsProfile: [],
    allPostProfile: [],
    loading: true,
    err: false,
    nb_like: null,
    nb_comment: null,
    nb_post: null,
    loadingInfo: true,
}

const getters = {
    posts_personne: state => state.postsProfile,
    allPostProfile: state => state.allPostProfile,
    loading: state => state.loading,
    nb_like: state => state.nb_like,
    nb_comment: state => state.nb_comment,
    nb_post: state => state.nb_post,
    loadingInfo: state => state.loadingInfo,
}

const actions = {

    async fetchPosts({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[1]}`
            }
        };
        await await axios.get(`http://127.0.0.1:8000/api/profile/post/${param[0]}`, config).
            then(response => { commit('setPosts', response.data); state.loading = false; }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            });
    },


    async getStatistics({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/profile/static/${localStorage.getItem('personne_id')}`, config);
        // console.log(response)
        commit('setStatistic', response.data);
        state.loadingInfo = false;

    },

    async newPost({ commit }, params) {
        let token = localStorage.getItem('user_token')
        var data = new FormData()
        for (let param in params) {
            data.append(param, params[param])
        }
        const response = await axios.post(`http://127.0.0.1:8000/api/profile/post/add`, data, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            // console.log(response);
            commit('addPosts', response.data);
        } else {
            console.log(response);
        }
    },

    async AllPost({ commit }) {
        let token = localStorage.getItem('user_token')

        const response = await axios.get(`http://127.0.0.1:8000/api/home/post/all`, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            // console.log(response);
            commit('setAllPosts', response.data);
            state.loading = false;
        } else {
            console.log(response);
        }
    },
    // async updateTodo({ commit }, updatedTodo) {
    //     await axios.put("http://127.0.0.1:8000/api/tasks/" + updatedTodo.id, updatedTodo).then(res => {
    //         console.log(res.data);
    //         commit('updateTodo', updatedTodo)
    //     }).catch(err => console.log(err));
    // },
    async updatePost({ commit }, params) {
        let token = localStorage.getItem('user_token')

        var data = new FormData()
        data.append('title', params[1])
        data.append('description', params[2])

        const response = await axios.post(`http://127.0.0.1:8000/api/profile/post/update/${params[0]}`, data, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            console.log(response);
            commit('updatePostData', response.data);
        } else {
            console.log(response);
        }
    },
}

const mutations = {
    setPosts: (state, postsProfile) => {
        state.loading = false;
        (state.postsProfile = postsProfile)

    },
    addPosts: function (state, postsProfile) {
        state.postsProfile.unshift(postsProfile)
        state.allPostProfile.unshift(postsProfile)
        state.nb_post += state.nb_post;
    },

    updatePostData: function (state, putPost) {
        state.postsProfile.splice(state.postsProfile.findIndex(el => el.id == putPost.id), 1, putPost);
    },



    setAllPosts: (state, allPostProfile) => {
        state.loading = false;
        (state.allPostProfile = allPostProfile);
    },


    setStatistic: (state, Statistic) => {
        console.log(Statistic);

        (state.nb_like = Statistic.nb_Like);
        (state.nb_comment = Statistic.nb_Comment);
        (state.nb_post = Statistic.nb_Posts);
        state.loadingInfo = false;

    },

}

export default {
    state,
    getters,
    actions,
    mutations
}