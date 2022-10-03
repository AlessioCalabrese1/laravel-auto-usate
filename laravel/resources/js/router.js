import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomePage from './pages/HomePage.vue';
import OptionalsIndex from './pages/OptionalsIndex.vue';
import CarShow from './pages/CarShow.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component:  HomePage
        },
        {
            path: '/optionals',
            name: 'optionals',
            component:  OptionalsIndex
        },
        {
            path: '/cars/:id',
            name: 'carShow',
            component:  CarShow
        }
    ]
});
export default router