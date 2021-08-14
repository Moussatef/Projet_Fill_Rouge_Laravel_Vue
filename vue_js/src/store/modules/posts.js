import axios from "axios";

const state = {
    postsProfile: [],
    allPostProfile: [],
    loading: true,
    err: false,
    nb_like: null,
    nb_comment: null,
    nb_post: null,
    loadingInfo: true,
}

const getters = {
    posts_personne: state => state.postsProfile,
    allPostProfile: state => state.allPostProfile,
    loading: state => state.loading,
    nb_like: state => state.nb_like,
    nb_comment: state => state.nb_comment,
    nb_post: state => state.nb_post,
    loadingInfo: state => state.loadingInfo,
}
const actions = {
    async fetchPosts({ commit }, param) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[1]}`
            }
        };
        await axios.get(`http://127.0.0.1:8000/api/profile/post/${param[0]}`, config).
            then(response => { commit('setPosts', response.data.data); state.loading = false;
            //  console.log(response.data.data); 
            }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            });
    },

    async getStatistics({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/profile/static/${localStorage.getItem('personne_id')}`, config);
        // console.log(response)
        commit('setStatistic', response.data);
        state.loadingInfo = false;

    },

    async newPost({ commit }, params) {
        let token = localStorage.getItem('user_token')
        var data = new FormData()
        for (let param in params) {
            data.append(param, params[param])
        }
        await axios.post(`http://127.0.0.1:8000/api/profile/post/add`, data, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        }).then(response => {
            commit('addPosts', response.data.data);
             state.loading = false;
            // console.log(response.data.data); 
        }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            })

    },

    async AllPost({ commit }) {
        let token = localStorage.getItem('user_token')

        const response = await axios.get(`http://127.0.0.1:8000/api/home/post/all`, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            // console.log(response);
            commit('setAllPosts', response.data.data);
            state.loading = false;
        } else {
            console.log(response);
        }
    },

    async updatePost({ commit }, params) {
        let token = localStorage.getItem('user_token')

        var data = new FormData()
        data.append('title', params[1])
        data.append('description', params[2])
        data.append('public', params[3])

        const response = await axios.post(`http://127.0.0.1:8000/api/profile/post/update/${params[0]}`, data, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            // console.log(response);
            commit('updatePostData', response.data);
        } else {
            console.log(response);
        }
    },
    //delete post
    async deletePost({ commit }, param) {

        await axios.post(`http://127.0.0.1:8000/api/profile/post/delete/${param[0]}`, {
            id: param[1],
        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }

        }).then(res => {
            commit('setPosts', res.data);
            // console.log(res.data)
        }).catch(err => console.log(err));
        // commit('newComment', response.data);
    },

    //like proccecs 

    async addLike({ commit }, param) {

        await axios.post(`http://127.0.0.1:8000/api/like/store`, {
            post_id: param[0],
            personne_id: param[1],

        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[2]}`
            }

        }).then(res => {
            commit('updatePostData', res.data.data[0])
            // console.log(res.data.data[0])
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
            // console.log(result.data[0]);
            commit('updatePostData', result.data[0])
        } else {
            var error = res;
            console.log("error", error);
        }

        // commit('newComment', response);
    },

    //Add comment to post
    async postComment({ commit }, param) {

        await axios.post(`http://127.0.0.1:8000/api/comment/store`, {
            personne_id: param[0],
            post_id: param[1],
            comment: param[2],
        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${param[3]}`
            }
        }).then(res => {
            // console.log(res.data.data[0]);
            commit('updatePostData', res.data.data[0]);
        }).catch(err => console.log(err));


        // commit('newComment', response.data);
    },

    //Delete comment to post
    async deleteComment({ commit }, param) {

        await axios.post(`http://127.0.0.1:8000/api/profile/post/comment/delete`, {
            personne_id: param[0],
            post_id: param[1],
            comment_id: param[2],

        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }
        }).then(res => {
            // console.log(res.data.data[0]);
            commit('updatePostData', res.data.data[0]);
        }).catch(err => console.log(err));
        // commit('newComment', response.data);
    },
}

const mutations = {
    setPosts: (state, postsProfile) => {
        state.loading = false;
        (state.postsProfile = postsProfile)

    },

    addPosts: function (state, addPost) {
        state.postsProfile.unshift(addPost[0]);
        // console.log(addPost[0]);
        state.allPostProfile.unshift(addPost[0]);
        state.nb_post += state.nb_post;
    },

    updatePostData: function (state, putPost) {
        state.postsProfile.splice(state.postsProfile.findIndex(el => el.id == putPost.id), 1, putPost);
        state.allPostProfile.splice(state.allPostProfile.findIndex(el => el.id == putPost.id), 1, putPost);
    },



    setAllPosts: (state, allPostProfile) => {
        state.loading = false;
        (state.allPostProfile = allPostProfile);
    },


    setStatistic: (state, Statistic) => {
        // console.log(Statistic);

        (state.nb_like = Statistic.nb_Like);
        (state.nb_comment = Statistic.nb_Comment);
        (state.nb_post = Statistic.nb_Posts);
        state.loadingInfo = false;

    },


    addLike: function (state, likePost) {
        state.postsProfile['like'].unshift(likePost[0])
        state.allPostProfile['like'].unshift(likePost[0])
        state.nb_like += state.nb_like;
    },

}

export default {
    state,
    getters,
    actions,
    mutations
}