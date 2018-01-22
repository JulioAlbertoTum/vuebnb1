import "core-js/fn/object/assign";
import Vue from 'vue';

import  ListingPage from '../js/components/ListingPage.vue';

var app = new Vue({
  el: '#app',
  render: h => h(ListingPage)

});
