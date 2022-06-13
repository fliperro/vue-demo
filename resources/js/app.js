import Vue from 'vue';
import './bootstrap';

window.Vue = Vue;

Vue.component('sum-calcucator', require('./components/SumCalculator.vue').default);
Vue.component('random-color', require('./components/RandomColor.vue').default);
Vue.component('card-generator', require('./components/CardGenerator.vue').default);

const app = new Vue({
    el: '#app',
});
