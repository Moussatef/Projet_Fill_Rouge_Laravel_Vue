import { createStore } from 'vuex'
import 'es6-promise/auto';
import posts from './modules/posts';
import token from './modules/token';
import apprenant from './modules/apprenant';
import comments from './modules/comments';
import likes from './modules/likes';


// create store 
export default createStore({
    modules: {
        posts,
        apprenant,
        comments,
        likes,
        token,
    }

})

