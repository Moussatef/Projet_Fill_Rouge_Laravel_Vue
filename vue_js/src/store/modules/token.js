import axios from "axios";

const state = {
    user_token: [],
    apprenant_id: [],
    err : [],
}

const getters = {
    user_token: state => state.user_token,
    apprenant_id: state => state.apprenant_id,
}

// async authent() {
//   var myHeaders = new Headers();
//   myHeaders.append("Accept", "application/json");
//   myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

//   var urlencoded = new URLSearchParams();
//   urlencoded.append("email", this.inp_email);
//   urlencoded.append("password", this.inp_password);

//   var requestOptions = {
//     method: "POST",
//     headers: myHeaders,
//     body: urlencoded,
//     redirect: "follow",
//   };
//   var selfe = this;

//   fetch("http://127.0.0.1:8000/api/personne/login", requestOptions)
//     .then((response) => response.json())
//     .then(function(result) {
//       localStorage.setItem("user_token", result.token);
//       localStorage.setItem("user_id", result.apprenant_id);
//       // console.log(result);
//       if (result.message) {
//         // localStorage.setItem("error", result.message);
//         selfe.err = result.message;
//         console.log(selfe.err);
//       }
//       // console.log(localStorage.getItem("user_token"));
//       else location.replace("/user/profile");
//     })
//     .catch(function(error) {
//       console.log("error", error);
//     });
// },
const actions = {
    async authent({ commit }, param) {

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

        const response = await fetch(`http://127.0.0.1:8000/api/personne/login`, requestOptions);
        if (response.status == 201) {
            var res = response.json()

            // console.log(result);
            if (result.message) {
                localStorage.setItem("error", res.message);
                console.log(res.message);
            } else {
                commit('setToken', response.data);
                localStorage.setItem("user_token", response.data.token)
                localStorage.setItem("user_id", response.data.apprenant_id)
                localStorage.setItem("personne_id", response.data.id_personne)
                location.replace("/user/profile")
            }
        } else {
            var err = response.json()
            console.log(err);

        }
    },
}

const mutations = {
    setToken: function (state, user) {
        state.user_token = user.token
        state.apprenant_id = user.apprenant_id
    }

}

export default {
    state,
    getters,
    actions,
    mutations
}



