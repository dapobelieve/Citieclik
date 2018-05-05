
require('./bootstrap');

import Vue from 'vue';

// import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000';

Vue.component('clicker', require('./components/clicks/ClickComponent.vue'));
Vue.component('counter', require('./components/clicks/Count.vue'));

const app = new Vue({
    el: '#app'
});
