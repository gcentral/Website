import Vue from 'vue';
import UserProfile from './UserProfile';


new Vue({
    el: 'UserProfile',
    render (createElement) {
        return createElement(UserProfile,
            {
                props: {
                    userJson: this.$el.attributes.userjson.value
                }
            });
    }
})