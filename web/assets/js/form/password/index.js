import Vue from 'vue';
import Password from './password';

var fields = document.querySelectorAll("gc-password");

fields.forEach(function(element) {
    new Vue({
        render (createElement) {
            return createElement(Password,
                {
                    class: this.$el.className,
                    props: {
                        name: this.$el.attributes.name.value
                    }
                }
            );
        }
    }).$mount(element);
});