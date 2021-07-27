import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './index.css'
import store from './store'
import CarouselCard from 'vue-carousel-card'
import 'vue-carousel-card/styles/index.css'


createApp(App).use(store).use(CarouselCard).use(router).mount('#app')
