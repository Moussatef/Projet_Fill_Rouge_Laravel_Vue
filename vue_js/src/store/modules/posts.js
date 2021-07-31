import axios from "axios";

const state = {
    postsProfile: [],
    allPostProfile: [],
}

const getters = {
    posts_personne: state => state.postsProfile,
    allPostProfile:  state => state.allPostProfile,
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

    async newPost({ commit }, params) {
        let token = localStorage.getItem('user_token')
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${token}`
            }
        };


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
        } else {
            console.log(response);
        }
    }
}

const mutations = {
    setPosts: (state, postsProfile) => (state.postsProfile = postsProfile),
    addPosts: function (state, postsProfile) {
        state.postsProfile.unshift(postsProfile)
    },
    setAllPosts:(state, allPostProfile) => (state.allPostProfile = allPostProfile),

}

export default {
    state,
    getters,
    actions,
    mutations
}