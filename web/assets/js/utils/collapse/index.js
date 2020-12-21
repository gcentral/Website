import Vue from 'vue';
import Collapse from './collapse';

var fields = document.querySelectorAll("gc-collapse");

fields.forEach(function(element) {
    new Vue({
        render (createElement) {
            return createElement(Collapse,
                {
                }
            );
        }
    }).$mount(element);
});