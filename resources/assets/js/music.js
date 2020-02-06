//主文件


require('./bootstrap');
//
// import MuseUi from 'muse-ui'
// import 'muse-ui/dist/muse-ui.css'
// import 'muse-ui/dist/theme-light.css'

import axios from 'axios';

require('./mock.js');
// console.log(Mock);

window.Vue = require('vue');
window.Hub = new Vue();

import uploader from 'vue-simple-uploader'

Vue.use(uploader)

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import VueScroller from 'vue-scroller'

Vue.use(VueScroller)

// import MuseUI from 'muse-ui'
// import 'muse-ui/dist/muse-ui.css'
// Vue.use(MuseUI)

const routes = [
    {path: '/player', component: Player},
    {path: '/album', component: Album},
    {path: '/upload', component: Upload},
    {path: '/testvue', component: TestVue },
    {path: '/vuelesson', component: VueLesson},
]

const router = new VueRouter({
    routes // （缩写）相当于 routes: routes
})

import Vuex from 'vuex';

Vue.use(Vuex);

import APlayer from 'vue-aplayer-plugin'
import 'vue-aplayer-plugin/dist/APlayer.min.css'

Vue.use(APlayer)
import VueVideoPlayer from 'vue-video-player'

// require videojs style
import 'video.js/dist/video-js.css'
Vue.use(VueVideoPlayer);

// import vueWaterfallEasy from 'vue-waterfall-easy'
// Vue.use(vueWaterfallEasy);

const store = new Vuex.Store({
    state: {
        count: 0, test1: 'test1', test2: 3, test4: 4
    },
    mutations: {
        increment(state) {
            state.count++
        }
    },
    actions: {
        increment (context) {
            context.commit('increment')
        }
    },
    getters: {
    doneTodos: state => {
        return state.count + state.test1;
    },
}
})

store.commit('increment');
store.commit('increment');
store.commit('increment');
store.commit('increment');
store.commit('increment');
console.log(store.state.count);

Vue.component('item', require('./components/music/item.vue'));
Vue.component('list', require('./components/music/list.vue'));
Vue.component('player', require('./components/music/player.vue'));

import Player from "./components/music/list_player.vue";
import Album from "./components/music/album.vue";
import Upload from "./components/music/upload.vue";
import TestVue from "./components/testvue.vue";

import VueLesson from "./components/vuelesson";


const app = new Vue({
    router,
    store,
    el: '#app'
});