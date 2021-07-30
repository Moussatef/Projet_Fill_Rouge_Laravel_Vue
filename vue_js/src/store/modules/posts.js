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
                Authorization: `Bearer 106|hXKRyrpbE5l8sSReFWv5DiXp6FmixIF9n9VkRyvD`
            }
        });
        if (response.status === 200) {
            console.log(response);
            commit('addPosts', response.data);
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
}

export default {
    state,
    getters,
    actions,
    mutations
}