import Vue from 'vue';
import Help from './help';

var fields = document.querySelectorAll("gc-help");

fields.forEach(function(element) {
    new Vue({
        render (createElement) {
            return createElement(Help,
                {
                }
            );
        }
    }).$mount(element);
});