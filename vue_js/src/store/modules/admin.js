import axios from "axios";



const state = {
    apprenant: [],
    admin_statistics: [],
    admin_posts: [],
    admin_info:null,
    allPostsAdmPages:1
}

const getters = {
    apprenant: state => state.apprenant,
    admin_statistics: state => state.admin_statistics,
    admin_posts: state => state.admin_posts,
    admin_info: state=>state.admin_info,
    allPostsAdmPages:state=>state.allPostsAdmPages
}

const actions = {

    async authentAdmin({ commit }, param) {

        var myHeaders = new Headers();
        myHeaders.append("Accept", "application/json");
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        var urlencoded = new URLSearchParams();
        urlencoded.append("email", param[0]);
        urlencoded.append("password", param[1]);

        var requestOptions = {
            method: "POST",
            headers: myHeaders,
            body: urlencoded,
            redirect: "follow",
        };

        const response = await fetch(`http://127.0.0.1:8000/api/admin/login`, requestOptions);
        if (response.status == 201) {
            var res = response.json()

            // console.log(result);
            if (res.message) {
                localStorage.setItem("error", res.message);
                console.log(res.message);
            } else {
                // commit('setToken', response.data);
                localStorage.setItem("admin_token", response.token)
                localStorage.setItem("admin_id", response.admin_id)
                location.replace("/admin/dashbord")
            }
        } else {
            var err = response.json()
            console.log(err);

        }
    },

    async getAdminInfo({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }
        };

        await axios.get(`http://127.0.0.1:8000/api/admin/info`, config).then(response => {
            commit('setAdminInfo', response.data);
        }).catch(err => {
            console.log("error", err);
        });
    },

    async updateAdminInfo({ commit },admin_info) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }
        };

        await axios.post(`http://127.0.0.1:8000/api/admin/update`,admin_info, config).then(response => {
            commit('setAdminInfo', response.data);
        }).catch(err => {
            console.log("error", err);
        });
    },

    async updateAdminPassword({ commit },password_data) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }
        };

        await axios.post(`http://127.0.0.1:8000/api/admin/update_password`, password_data, config);
    },

    async getAllApprenant({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }
        };

        await axios.get(`http://127.0.0.1:8000/api/admin/apprenant`, config).then(response => { commit('setApprenant', response.data.data); }).catch(err => { console.log("error", err); });
        // console.log(response)

    },

    async getStatisticsAdm({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/admin/statistic`, config);
        // console.log(response.data)

        commit('setStatistics', response.data);
    },
    async getPostsAdm({ commit },page=1) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/admin/posts?page=${page}`, config);
        // console.log(response.data)

        commit('setPostsAdm', response.data);
    },

    async validateApprenant({ commit }, params) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem("admin_token")}`
            }

        };
        await axios.post(`http://127.0.0.1:8000/api/admin/validate`, {
            'personne_id': params
        },
            config

        )
            .then(result => {
                // console.log(result.data.data[0]);
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
    setPostsAdm: (state, posts) => {
        state.admin_posts.push(...posts.data);
        state.allPostsAdmPages=posts.meta.last_page;
    },
    setAdminInfo: (state, admin_info) => {
        state.admin_info = admin_info
    }
}



export default {
    state,
    getters,
    actions,
    mutations
}