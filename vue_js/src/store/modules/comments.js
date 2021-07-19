// import axios from "axios";

// const state = {
//     comments: []
// }

// const getters = {
//     comments: state => state.comments
// }

// const actions = {
//     async fetchComments({ commit }, param) {
//         const config = {
//             headers: {
//                 Accept: "application/json",
//                 Authorization: `Bearer ${param[1]}`
//             }
//         };

//         const response = await axios.get(`http://127.0.0.1:8000/api/personne/fullname/id/${param[0]}`, config);
//         console.log(response)

//         commit('setComments', response.data);
//     },
// }

// const mutations = {
//     setComments: (state, comments) => (state.comments = comments)
// }




// export default {
//     state,
//     getters,
//     actions,
//     mutations
// }