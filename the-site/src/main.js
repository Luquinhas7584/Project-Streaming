import Vue from 'vue'
import App from './App.vue'

//
// const routes = [
//     {
//       path: '/',
//       component: ()=>import('./components/Home')
//     },
//     {
//       path: '/login',
//       component: ()=>import('./components/Login')
//     }
//   ];

// const router = new VueRouter({
//   mode: 'history',
//   base: process.env.BASE_URL,
//   routes
// })

new Vue({
  //router,
  render: h => h(App)
}).$mount('#app')