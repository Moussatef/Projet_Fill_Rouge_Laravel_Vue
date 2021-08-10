import axios from "axios";



const state = {
    apprenant: [],
    admin_statistics: [],
}

const getters = {
    apprenant: state => state.apprenant,
    admin_statistics: state => state.admin_statistics,
}

const actions = {

    async getAllApprenant({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                // Authorization: `Bearer ${param[1]}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/admin/apprenant`, config);
        // console.log(response)

        commit('setApprenant', response.data.data);
    },

    async getStatisticsAdm({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                // Authorization: `Bearer ${param[1]}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/admin/statistic`, config);
        // console.log(response.data)

        commit('setStatistics', response.data);
    },

    async validateApprenant({ commit }, params) {
        const config = {
            headers: {
                Accept: "application/json",
                // Authorization: `Bearer ${param[1]}`
            }
        };
        await axios.post(`http://127.0.0.1:8000/api/admin/validate`, { 'personne_id': params, config })
            .then(result => {
                console.log(result.data.data[0]);
                commit('updateAprenantData', result.data.data[0])
            }
            )
            .catch(error => console.log('error', error));



    }

}


const mutations = {
    setApprenant: (state, apprenant) => (state.apprenant = apprenant),
    setStatistics: function (state, data) {
        state.admin_statistics = data

    },
    updateAprenantData: function (state, apprenant) {
        state.apprenant.splice(state.apprenant.findIndex(el => el.id == apprenant.id), 1, apprenant);
    },

}



export default {
    state,
    getters,
    actions,
    mutations
}