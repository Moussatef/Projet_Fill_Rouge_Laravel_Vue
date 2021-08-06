import axios from "axios";

const state = {
   comments: []
}

const getters = {
   comments: state => state.comments
}

const actions = {
   async fetchComments({ commit }, param) {
      const config = {
         headers: {
            Accept: "application/json",
            Authorization: `Bearer ${param[1]}`
         }
      };

      const response = await axios.get(`http://127.0.0.1:8000/api/personne/fullname/id/${param[0]}`, config);
      // console.log(response)

      commit('setComments', response.data);
   },
}

const mutations = {
   setComments: (state, comments) => (state.comments.unshift(comments)),
   newComment: function (state, comments) {
      state.comments.unshift(comments)
   },
}




export default {
   state,
   getters,
   actions,
   mutations
}




















 // async getInfoUser(token, id_apprenant) {
    //   var myHeaders = new Headers();
    //   myHeaders.append("Accept", "application/json");
    //   myHeaders.append("Authorization", "Bearer 	" + token);

    //   var requestOptions = {
    //     method: "GET",
    //     headers: myHeaders,
    //     redirect: "follow",
    //   };
    //   var res = await fetch(
    //     "http://127.0.0.1:8000/api/apprenant/id/" + id_apprenant,
    //     requestOptions
    //   );

    //   if (res.status === 200) {
    //     const result = await res.json();

    //     console.log(result);
    //     this.apprenant = result;
    //   } else {
    //     var error = res;
    //     console.log("error", error);
    //   }
    // },
    // async getPostProfile(token, id_apprenant) {
    //   var myHeaders = new Headers();
    //   myHeaders.append("Accept", "application/json");
    //   myHeaders.append("Authorization", "Bearer " + token);

    //   var requestOptions = {
    //     method: "GET",
    //     headers: myHeaders,
    //     redirect: "follow",
    //   };

    //   var res = await fetch(
    //     "http://127.0.0.1:8000/api/profile/post/" + id_apprenant,
    //     requestOptions
    //   );

    //   if (res.status === 200) {
    //     const result = await res.json();

    //     console.log(result);
    //     this.posts = result;
    //   } else {
    //     var error = res;
    //     console.log("error", error);
    //   }
    // },
    // async commentPost(id_person, id_post, comment, token) {
    //   var myHeaders = new Headers();
    //   myHeaders.append("Accept", "application/json");
    //   myHeaders.append("Authorization", "Bearer " + token);
    //   myHeaders.append("Content-Type", "application/json");

    //   var raw = JSON.stringify({
    //     personne_id: id_person,
    //     post_id: id_post,
    //     comment: comment,
    //   });

    //   var requestOptions = {
    //     method: "POST",
    //     headers: myHeaders,
    //     body: raw,
    //     redirect: "follow",
    //   };
    //   const res = await fetch(
    //     "http://127.0.0.1:8000/api/comment/store",
    //     requestOptions
    //   );
    //   if (res.status === 200) {
    //     const result = await res.json();
    //     console.log(result);
    //   } else {
    //     var error = res;
    //     console.log("error", error);
    //   }
    // },










    // this.getInfoUser(this.token, this.id_apprenant);
    // this.getPostProfile(this.token, this.id_apprenant);