import Vue from 'vue'
import App from './App.vue'
import ColorDirective from './color'
import List from './List'
import Vuelidate from 'vuelidate'
import VueRouter from 'vue-router'
import router from './routes'
import VueResource from 'vue-resource'


export const eventEmitter = new Vue();

Vue.directive('colored',ColorDirective);
Vue.filter('uppercase',value=>value.toUpperCase());
Vue.component('app-list',List);
Vue.use(Vuelidate);
Vue.use(VueResource);

Vue.use(VueRouter);

new Vue({
  el: '#app',
  render: h => h(App),
  router
});

