import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/login.vue'
import UserProfile from '../views/profile.vue'
import Register from '../views/signup.vue'
import AdminDash from '../views/AdminDash.vue'
import AdminLogin from '../views/AdminLogin.vue'
import ProblemPost from '../views/ProblemPost.vue'
import Contact from '../views/contact.vue'
const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact
  },

  {
    path: '/problem/post',
    name: 'ProblemPost',
    component: ProblemPost,
    beforeEnter: (to, from, next) => {
      if (localStorage.getItem('user_token')) {
        next();
      } else {
        next('/');
      }
    }

  },
  {
    path: '/admin/dashbord',
    name: 'AdminDashbord',
    component: AdminDash,
    beforeEnter: (to, from, next) => {
      if (localStorage.getItem('admin_token')) {
        next();
      } else {
        next('/');
      }
    }

  },
  {
    path: '/admin/login',
    name: 'AdminLogin',
    component: AdminLogin,
    beforeEnter: (to, from, next) => {
      if (localStorage.getItem('user_token') || localStorage.getItem('admin_token')) {
        next('/');
      } else {
        next();
      }
    },
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

    }
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
    beforeEnter: (to, from, next) => {
      if (localStorage.getItem('user_token') || localStorage.getItem('admin_token')) {
        next('/');
      } else {
        next();
      }

    }
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
