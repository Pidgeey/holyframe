import Vue from 'vue';

import MainComponent from './components/MainComponent';

let app = new Vue({
    el: '#app',
    components: {
        MainComponent,
    },
    data: {
        message: 'Welcome to HolyFrame'
    }
});