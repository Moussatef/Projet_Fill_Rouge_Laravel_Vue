import axios from "axios";

const state = {
   
    user_info: [],
    new_user: [],
    autrUser: [],
    nb_like: null,
    nb_comment: null,
    nb_post: null,

}

const getters = {
    user_info: state => state.user_info,
    new_user: state => state.new_user,
    






}

const actions = {


    


    async fetchAllUser({ commit }, param) {
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
            campus_id: param[15],

        }, {
            headers: {
                Accept: "application/json",
            }
        });
        if (response.status == 201) {
            const result = await response;
            // console.log(result.data[0])
            // commit('newUser', response.data[0]);
            location.replace("/user/profile")
        } else {
            console.log(error);
        }

    },

    addApprenant({ commit }, apprenant) {
        commit('setApprenant', apprenant);

    },

    async updateImg({ commit }, params) {
        var data = new FormData();

        data.append("img", params[0]);
        data.append("cover", params[1]);

        const result = await axios.post(
            "http://127.0.0.1:8000/api/personne/update/img/" +
            params[2] +
            "/" +
            localStorage.getItem("personne_id"),
            data,
            {
                headers: {
                    Accept: "application/json",
                    Authorization: "Bearer " + localStorage.getItem("user_token"),
                },
            }
        );
        if (result.status === 200) {
            //console.log(result);
            commit("setUser", result.data);
        } else {
            console.log(result);
        }
    },



}

const mutations = {
    
    setUser: (state, user_info) => (state.user_info = user_info),
    newUser: function (state, new_user) {
        state.new_user = new_user
        // state.apprenant.unshift(new_user);
    },



}

export default {
    state,
    getters,
    actions,
    mutations
}