import axios from "axios";

const state = {
    postsProfile: [],
    postsProblem: [],
    allPostProfile: [],
    allPostProblem: [],
    categorie: [],
    loading: !!localStorage.getItem('user_token'),
    err: false,
    nb_like: null,
    nb_comment: null,
    nb_post: null,
    loadingInfo: true,
    allPostsPages: 1,
    allPostsProfilePages: 1,
    allPostsProblemPages: 1,
    allPostsProblemHomePages: 1,
}

const getters = {
    posts_personne: state => state.postsProfile,
    postsProblem: state => state.postsProblem,
    allPostProfile: state => state.allPostProfile,
    allPostProblem: state => state.allPostProblem,
    loading: state => state.loading,
    nb_like: state => state.nb_like,
    nb_comment: state => state.nb_comment,
    nb_post: state => state.nb_post,
    loadingInfo: state => state.loadingInfo,
    allPostsPages: state => state.allPostsPages,
    allPostsProfilePages: state => state.allPostsProfilePages,
    allPostsProblemPages: state => state.allPostsProblemPages,
    allPostsProblemHomePages: state => state.allPostsProblemHomePages,
    categorie: state => state.categorie,
}
const actions = {
    async fetchPosts({ commit }, page = 1) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }
        };
        await axios.get(`http://127.0.0.1:8000/api/profile/post?page=${page}`, config).
            then(response => {
                commit('setPosts', response.data.data);
                commit('setallPostsProfilePages', response.data.meta.last_page);

                state.loading = false;
                //  console.log(response.data.data); 
            }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            });
    },


    async fetchPostsProblem({ commit }, page = 1) {
        const config = {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }
        };
        await axios.get(`http://127.0.0.1:8000/api/problem/post?page=${page}`, config).
            then(response => {
                commit('setPostsProblem', response.data.data);

                commit('setPostsProblemPage', response.data.meta.last_page);

                state.loading = false;
                console.log(response.data.data);
            }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            });
    },

    async AllPost({ commit }, page = 1) {
        let token = localStorage.getItem('user_token')

        const response = await axios.get(`http://127.0.0.1:8000/api/home/post/all?page=${page}`, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            // console.log(response);
            commit('setAllPosts', response.data.data);
            commit('setAllPostsPageLimit', response.data.meta.last_page);
            state.loading = false;
        } else {
            console.log(response);
        }
    },

    async fetchAllPostProblem({ commit }, page = 1) {
        let token = localStorage.getItem('user_token')
        const response = await axios.get(`http://127.0.0.1:8000/api/problem/post/all?page=${page}`, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        });
        if (response.status === 200) {
            // console.log(response);
            commit('setAllPostsProblem', response.data.data);
            commit('setAllPostsProblemPageLimit', response.data.meta.last_page);
            state.loading = false;
        } else {
            console.log(response);
        }
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

    async getCategorie({ commit }) {
        const config = {
            headers: {
                Accept: "application/json",
            }
        };

        const response = await axios.get(`http://127.0.0.1:8000/api/categorie`, config);
        // console.log(response)
        commit('setCategorie', response.data);

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

            // console.log(response.data.data); 
        }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            })

    },
    async newPostProblem({ commit }, params) {
        let token = localStorage.getItem('user_token')
        var data = new FormData()
        for (let param in params) {
            data.append(param, params[param])
        }
        await axios.post(`http://127.0.0.1:8000/api/problem/post/add`, data, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer  ${token}`
            }
        }).then(response => {
            commit('addPostProblem', response.data.data);
            state.loading = false;
            // console.log(response.data.data); 
        }).
            catch(err => {
                state.loading = false;
                state.err = true;
                console.log(err);
            })

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
            commit('updatePostData', response.data.data[0]);
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

            commit('removePostProfile',param[0]);
            console.log(res.data)
        }).catch(err => console.log(err));
        // commit('newComment', response.data);
    },

    async deletePostProblem({ commit }, param) {

        await axios.post(`http://127.0.0.1:8000/api/problem/post/delete/${param[0]}`, {
            id: param[1],
        }, {
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${localStorage.getItem('user_token')}`
            }

        }).then(res => {

            commit('removePostProblem', param[0]);
            console.log(res.data)
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
        (state.postsProfile.push(...postsProfile))

    },
    setPostsProblem: (state, postsProblem) => {
        state.loading = false;
        (state.postsProblem.push(...postsProblem))

    },
    setAllPostsProblem: (state, postsProblem) => {
        state.loading = false;
        (state.allPostProblem.push(...postsProblem))

    },

    addPosts: function (state, addPost) {
        state.postsProfile.unshift(addPost[0]);
        // console.log(addPost[0]);
        state.allPostProfile.unshift(addPost[0]);
    },

    addPostProblem: function (state, addPost) {
        state.postsProblem.unshift(addPost[0]);
    },

    updatePostData: function (state, putPost) {
        if (!putPost.categorie) {
            // console.log(state.postsProfile.findIndex(el => el.id == putPost.id));
            state.postsProfile.splice(state.postsProfile.findIndex(el => el.id == putPost.id), 1, putPost);
            state.allPostProfile.splice(state.allPostProfile.findIndex(el => el.id == putPost.id), 1, putPost);
        } else {
            state.postsProblem.splice(state.postsProblem.findIndex(el => el.id == putPost.id), 1, putPost);
            state.allPostProblem.splice(state.allPostProblem.findIndex(el => el.id == putPost.id), 1, putPost);
        }

        // console.log(putPost.categorie);

    },

    removePostProfile : function (state,id_post){
        // console.log('mn bara',state.postsProfile.findIndex(el => el.id == id_post));
       
        state.postsProfile.splice(state.postsProfile.findIndex(el => el.id == id_post), 1);
        state.allPostProfile.splice(state.allPostProfile.findIndex(el => el.id == id_post), 1);
       

    },

    removePostProblem : function (state,id_post){
        // console.log('mn bara',state.postsProfile.findIndex(el => el.id == id_post));
       
        state.postsProblem.splice(state.postsProfile.findIndex(el => el.id == id_post), 1);
        state.allPostProblem.splice(state.allPostProfile.findIndex(el => el.id == id_post), 1);
       

    },



    setAllPosts: (state, allPostProfile) => {
        state.loading = false;
        (state.allPostProfile.push(...allPostProfile));
    },

    setAllPostsPageLimit: (state, allPostsPages) => {
        state.allPostsPages = allPostsPages;
    },

    setPostsProblemPage: (state, allPostsProblemPages) => {
        state.allPostsProblemPages = allPostsProblemPages;
    },

    setallPostsProfilePages: (state, allPostsProfilePages) => {
        state.allPostsProfilePages = allPostsProfilePages;
    },

    setAllPostsProblemPageLimit: (state, allPostsProblemHomePages) => {
        state.allPostsProblemHomePages = allPostsProblemHomePages;
    },



    setCategorie: (state, categorie) => {
        state.categorie = categorie;
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