require('./bootstrap');


window.Vue = require('vue');
window.axios = require('axios');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('image-preview', require('./components/imagepreview/FeatureImage.vue').default);
Vue.component('category-dropdown', require('./components/CategoryDropDown.vue').default);
Vue.component('country-dropdown', require('./components/AddressDropDown.vue').default);





const app = new Vue({
     el: '#app',          
});