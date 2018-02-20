import Vue from 'vue';

Vue.component('test', require('./components/Test.vue'));

const app = new Vue({
    el: '#app'
});
