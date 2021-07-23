import axios from "axios";

const state = {
    likes: [],
}

const getters = {
    likes: state => state.likes,
}

const actions = {
    async addLike({ commit }, param) {
        var raw = JSON.stringify({
            post_id: param[0],
            personne_id: param[1],
        });
        const response = await axios.post(`http://127.0.0.1:8000/api/like/store`, {
            post_id: param[0],
            personne_id: param[1],

        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[2]}`
            }

        }).then(res => {
            commit('newLike', raw)
            console.log(response)
        }).catch(err => console.log(err));




        // commit('newComment', response.data);
    },
    async UnLike({ commit }, param) {


        var myHeaders = new Headers();
        myHeaders.append("Accept", "application/json");
        myHeaders.append("Authorization", "Bearer " + param[2]);
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify({
            post_id: param[0],
            personne_id: param[1],
        });

        var requestOptions = {
            method: "DELETE",
            headers: myHeaders,
            body: raw,
            redirect: "follow",
        };
        const res = await fetch(
            "http://127.0.0.1:8000/api/like/destroy/",
            requestOptions
        );
        if (res.status === 200) {
            const result = await res.json();
            console.log(result);
            commit('removeLike', res)
        } else {
            var error = res;
            console.log("error", error);
        }

        // commit('newComment', response);
    },
}

const mutations = {
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