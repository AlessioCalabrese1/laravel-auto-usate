window.Vue = require('vue');

import App from './views/App';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import router from './router';

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
})