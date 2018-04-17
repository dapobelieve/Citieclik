import Vue from 'vue';

Vue.component('test', require('./components/Test.vue'));




Vue.component('clicker', require('./components/clicks/ClickComponent.vue'));

const app = new Vue({
    el: '#app'
});
