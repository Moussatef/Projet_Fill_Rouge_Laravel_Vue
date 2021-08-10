import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/login.vue'
import UserProfile from '../views/profile.vue'
import Register from '../views/signup.vue'
import AdminDash from '../views/AdminDash.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },

  {
    path: '/admin/dashbord',
    name: 'AdminDashbord',
    component: AdminDash
  },

  {
    path: '/user/register',
    name: 'Register',
    component: Register
  },
  {
    path: '/user/profile',
    name: 'UserProfile',
    component: UserProfile,
    beforeEnter: (to, from, next) => {
      if (localStorage.getItem('user_token')) {
        next();
      } else {
        next('/login');
      }

      next();
    }
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
