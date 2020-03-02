import Vue from 'vue'
import App from './App.vue'
import VueGlide from 'vue-glide-js'



Vue.config.productionTip = false

Vue.use(VueGlide)


new Vue({
  render: h => h(App)
}).$mount('#app')
