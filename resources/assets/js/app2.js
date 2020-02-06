
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';

import 'mint-ui/lib/style.css'

import { Loadmore } from 'mint-ui';



const app = new Vue({
    el: '#app'
});
Vue.component(Loadmore.name, Loadmore);
