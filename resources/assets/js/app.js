
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import axios from 'axios';
import MintUI from 'mint-ui';
import 'mint-ui/lib/style.css'

import { Tabbar, TabItem } from 'mint-ui';
import { TabContainer, TabContainerItem } from 'mint-ui';
import { Header } from 'mint-ui';
import { Cell } from 'mint-ui';
import { Navbar } from 'mint-ui';


// import App from './App.vue'

Vue.use(MintUI)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import { AlertPlugin, ToastPlugin } from 'vux';
// Vue.use(AlertPlugin)
// Vue.use(ToastPlugin)

Vue.component('example', require('./components/Example.vue'));
Vue.component('test', require('./components/test.vue'));


Vue.component(TabContainer.name, TabContainer);
Vue.component(TabContainerItem.name, TabContainerItem);
Vue.component(Header.name, Header);
Vue.component(Cell.name, Cell);
Vue.component(Tabbar.name, Tabbar);
Vue.component(TabItem.name, TabItem);
Vue.component(Navbar.name, Navbar);

const app = new Vue({
    el: '#app'
});
