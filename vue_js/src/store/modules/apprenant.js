import axios from "axios";

const state = {
    user_info: [],
    new_user: [],
}

const getters = {
    user_info: state => state.user_info,
    new_user: state => state.new_user,

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
        // console.log(response)

        commit('setUser', response.data);
    },

    async registerApprenant({ commit }, param) {
        const data = new FormData();
        data.append(
            "img",
            param[12],
        );
        const response = await axios.post(`http://127.0.0.1:8000/api/apprenant/register`, {
            prenom: param[0],
            nom: param[1],
            email: param[2],
            password: param[3],
            password_confirmation: param[4],
            telephon: param[5],
            date_N: param[6],
            adresse: param[7],
            github: param[8],
            linkedin: param[9],
            facebook: param[10],
            instagram: param[11],
            img: param[12],
            cover: param[13],
            bio: param[14],

        }, {
            headers: {
                Accept: "application/json",
            }

        });
        if (response.status == 201) {
            const result = await response;
            console.log(result.data.apprenant);
            commit('newUser', response.data);
            localStorage.setItem("user_token", result.data.personne.token)
            localStorage.setItem("user_id", result.data.apprenant)
            localStorage.setItem("personne_id", response.data.personne_id)
            location.replace("/user/profile")
        } else {
            console.log(error);
        }



    },



}

const mutations = {
    setUser: (state, user_info) => (state.user_info = user_info),
    newUser: function (state, new_user) {
        state.new_user = new_user

    },

}

export default {
    state,
    getters,
    actions,
    mutations
}