import Vue from 'vue';
import Vuex from 'vuex';
import wheel from './modules/wheel';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        wheel
    }
});