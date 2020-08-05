require('./bootstrap');

window.Vue = require('vue');

Vue.component('user-search', require('./components/UserSearch').default);

let app = document.getElementById('app')
//&Vue.mixin({ methods: { route: window.route } })

new Vue().$mount(app)
