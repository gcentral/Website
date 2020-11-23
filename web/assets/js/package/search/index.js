import Vue from 'vue';
import PkgSearch from './pkg-search';

new Vue({
    render (h) {
        return h(PkgSearch);
    }
}).$mount('#pkg_search')