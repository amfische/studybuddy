
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.marked = require('marked');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('text-area-block', require('./components/TextAreaBlock.vue'));
Vue.component('checkmark', require('./components/Checkmark.vue'));
Vue.component('flashcards', require('./components/Flashcards.vue'));
Vue.component('study-options', require('./components/StudyOptions.vue'));
Vue.component('questions-table', require('./components/QuestionsTable.vue'));

const app = new Vue({
  el: '#app'
});
