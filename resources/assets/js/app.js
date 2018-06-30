
require('./bootstrap');

import Vue from 'vue';

import axios from 'axios';

axios.defaults.baseURL = Laravel.url;

Vue.component('clicker', require('./components/clicks/ClickComponent.vue'));
Vue.component('counter', require('./components/clicks/Count.vue'));
Vue.component('count-chart', require('./components/charts/ClickChartComponent.vue'));
Vue.component('user-chart', require('./components/charts/UserChartComponent.vue'));
Vue.component('service-chart', require('./components/charts/ServiceChartComponent.vue'));

const app = new Vue({
    el: '#app'
});
