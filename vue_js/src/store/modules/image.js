import axios from "axios";

const state = {
    imageFor: [],
    image: [],
}

const getters = {
    imageFor: state => state.imageFor,
    image: state => state.image,
}


const actions = {
    async fetchImageFore({ commit }) {
        const response = await axios.post(`http://127.0.0.1:8000/api/profile/image`, {
            personne_id: localStorage.getItem('personne_id'),
        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }

        });
        // console.log(response.data[0].path)
        commit('setImageFore', response.data);
    },
}

const mutations = {
    setImageFore: function (state, image) {
        state.imageFor = image
    }

}

export default {
    state,
    getters,
    actions,
    mutations
}