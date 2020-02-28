import Vue from 'vue'
import App from './App.vue'
import VueGlide from 'vue-glide-js'

Vue.use(VueGlide)


Vue.config.productionTip = false



new Vue({
  render: h => h(App)
}).$mount('#app')
