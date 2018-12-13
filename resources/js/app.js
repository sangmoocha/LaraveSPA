require('./bootstrap');
// window.Vue = require('vue');
import Vue from 'vue';

import Vuex from 'vuex';
import storeDate from './store/store';
Vue.use(Vuex);

const store = new Vuex.Store(storeDate);

import VueRouter from 'vue-router';
import { routes } from './router/routes';
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes, // `routes: routes`의 줄임
})

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router,
    store,
    mounted() {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
      });
    }
});
