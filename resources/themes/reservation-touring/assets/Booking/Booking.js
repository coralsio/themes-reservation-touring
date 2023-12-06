import Vue from 'vue';
import axios from 'axios';
import moment from "moment";
import Booking from "./Components/Booking";


window.moment = moment;
window.axios = axios;


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

if (window.base_url) {
    window.axios.defaults.baseURL = window.base_url;
}

let BookingVue = new Vue({
    el: '#booking-vue',
    components: {
        Booking
    }
});
