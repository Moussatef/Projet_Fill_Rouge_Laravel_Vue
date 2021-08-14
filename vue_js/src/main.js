import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './index.css'
import store from './store'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import { ObserveVisibility } from 'vue-observe-visibility';


const app = createApp(App);
app.use(store);
app.use(VueSweetalert2);
app.use(router);
app.directive('observe-visibility', {
    beforeMount: (el, binding, vnode) => {
        vnode.context = binding.instance;
        ObserveVisibility.bind(el, binding, vnode);
    },
    update: ObserveVisibility.update,
    unmounted: ObserveVisibility.unbind,
});

app.mount('#app');