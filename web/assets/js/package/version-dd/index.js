import Vue from 'vue';
import VersionDD from './VersionDD';

new Vue({
    el: 'VersionDD',
    render (createElement) {
        return createElement(VersionDD,
            {
                props: {
                    package: this.$el.attributes.package.value
                }
            });
    }
})