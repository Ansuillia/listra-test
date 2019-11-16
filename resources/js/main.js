import 'materialize-css/dist/js/materialize'

import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store'


Vue.filter('decimal', function (value) {
    return parseFloat(value).toLocaleString('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    })
})

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app')
