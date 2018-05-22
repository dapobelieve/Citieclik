
require('./bootstrap');

import Vue from 'vue';

import axios from 'axios';

axios.defaults.baseURL = Laravel.url;

Vue.component('clicker', require('./components/clicks/ClickComponent.vue'));
Vue.component('counter', require('./components/clicks/Count.vue'));
Vue.component('chart', require('./components/chart/ChartComponent.vue'));

const app = new Vue({
    el: '#app'
});
