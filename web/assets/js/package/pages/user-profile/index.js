import Vue from 'vue';
import UserProfile from './UserProfile';

new Vue({
    el: 'UserProfile',
    render (createElement) {
        return createElement(UserProfile,
            {
                props: {
                    usrInfo: this.$el.attributes.usrinfo.value
                }
            });
    }
})