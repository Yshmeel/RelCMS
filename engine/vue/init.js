import VueRouter from 'vue-router';
import RestAPI from "./api/RestAPI";

/** Import all components before Vue initialization */
import '../../webpack.components.js';
/** End */

if(window.routes === undefined) {
    window.routes = [];
}

let routes = window.routes;

let router = new VueRouter({
    mode: 'history',
    routes
});

const vueDefaultData = {
    API: new RestAPI,
    routes: routes
};

const vueDefaultMethods = {};

Vue.use(VueRouter);

window.app = new Vue({
    el: '#app',
    router,
    data: Object.assign(window.vueAppData, vueDefaultData),
    methods: Object.assign(window.vueMethods, vueDefaultMethods)
});
