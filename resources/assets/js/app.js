import Vue from 'vue';

Vue.component('clicker', require('./components/clicks/ClickComponent.vue'));

const app = new Vue({
    el: '#app'
});
