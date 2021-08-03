import axios from "axios";

const state = {
    postsProfile: [],
    allPostProfile: [],
    loading: true,
    err: false
}

const getters = {
    posts_personne: state => state.postsProfile,
    allPostProfile: state => state.allPostProfile,
    loading: state => state.loading,
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
            console.log(response);
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
            console.log(response);
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
        data.append('public', params[3])

        const response = await axios.post(`http://127.0.0.1:8000/api/profile/post/update/${params[0]}`, data, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            console.log(response);
            commit('updatePost', response.data);
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

    },
    setAllPosts: (state, allPostProfile) => {
        state.loading = false;
        (state.allPostProfile = allPostProfile);
    },
    updatePost: (state, updatePost) => {
        state.postsProfile.splice(state.postsProfile.findIndex(el => el.id == updatePost.id), 1, updatePost);
    },

}

export default {
    state,
    getters,
    actions,
    mutations
}