import axios from "axios";

const state = {
    
    campus: [],
}

const getters = {
    campus: state => state.campus,
}


const actions = {
    async fetchCampus({ commit }) {
        const response = await axios.get(`http://127.0.0.1:8000/api/campus`,{
            headers: {
                Accept: "application/json",
            }

        });
        // console.log(response.data[0].path)
        commit('setCampus', response.data);
    },
}

const mutations = {
    setCampus: function (state, campus) {
        state.campus = campus
    }

}

export default {
    state,
    getters,
    actions,
    mutations
}