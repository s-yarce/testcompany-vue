import Vue from 'vue'
import App from './App.vue'
import './assets/css/styles.css'
import './assets/css/bootstrap.css'
import VueResource from 'vue-resource'

Vue.use(VueResource)

Vue.http.options.root = 'http://localhost/wp-json/';

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
