
require('./bootstrap');

import Vue from 'vue';

// import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000/';

Vue.component('clicker', require('./components/clicks/ClickComponent.vue'));

const app = new Vue({
    el: '#app'
});
