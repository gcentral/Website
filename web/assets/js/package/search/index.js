import Vue from 'vue';
import PkgSearch from './pkg-search';

new Vue({
    render (createElement) {
        return createElement(PkgSearch);
    }
}).$mount('#pkg_search')