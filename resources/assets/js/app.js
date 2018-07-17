
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
let Datepicker = require ('vuejs-datepicker').default;

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('task-list', require('./components/Dashboard'));
Vue.component('task-form', require('./components/Task-form'));
Vue.component('task-card', require('./components/Task-card'));
Vue.component('datepicker', require('./components/Datepicker.vue'));

const app = new Vue({
    el: '#app',
});

const date_picker = new Vue({
    el: '#date_picker',
    components: {
        Datepicker
    }
});