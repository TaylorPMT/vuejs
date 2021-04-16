import Vue from 'vue';
import Vuex from 'vuex';
import Tag from './module/store';

Vue.use(Vuex);
let localStorage = {
    Tag,

}
let modules = Object.assign(localStorage);
export default new Vuex.Store({modules})
