import { createStore } from 'vuex'
import 'es6-promise/auto';
import posts from './modules/posts';
import token from './modules/token';
import apprenant from './modules/apprenant';
import comments from './modules/comments';
import likes from './modules/likes';
import Image from './modules/image';
import campus from './modules/campus';
import admin from './modules/admin';


// create store 
export default createStore({
    modules: {
        posts,
        apprenant,
        comments,
        likes,
        token,
        Image,
        campus,
        admin,
    }

})

