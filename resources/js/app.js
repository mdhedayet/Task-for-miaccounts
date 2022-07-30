import Vue from 'vue'
import router from '../js/router/index.js'
import App from '../js/App.vue'

Vue.component('pagination', require('laravel-vue-pagination'));


import '../js/assets/css/styles.css'
import '../js/assets/js/scripts.js'

new Vue({
    router,
    render: h => h(App)
  }).$mount('#app')
