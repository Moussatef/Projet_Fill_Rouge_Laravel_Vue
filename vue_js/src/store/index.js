import { createStore } from 'vuex'
import 'es6-promise/auto';

import posts from './modules/posts';
import comments from './modules/comments';

//Load Vuex
// Vue.use(Vuex);
// create store 
export default  createStore({
    modules:{
        posts,
    }

})

