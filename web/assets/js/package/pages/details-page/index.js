import Vue from 'vue';
import DetailsPage from './DetailsPage';

new Vue({
    el: 'DetailsPage',
    render (createElement) {
        return createElement(DetailsPage,
            {
                props: {
                    pkg: this.$el.attributes.pkg.value
                }
            });
    }
})