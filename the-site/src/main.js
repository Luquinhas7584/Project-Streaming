import { createApp } from 'vue'
import App from './App.vue'

createApp(App).mount('#app')

const routes = [
    {
      path: '/Home',
      component: home,
      children: [
        {
          path: 'new',
          component: PostsNew,
          // only authenticated users can create posts
          meta: { requiresAuth: true }
        },
        {
          path: ':id',
          component: PostsDetail,
          // anybody can read a post
          meta: { requiresAuth: false }
        }
      ]
    }
  ]