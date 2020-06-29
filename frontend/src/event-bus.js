import Vue from 'vue';

const EventBus = new Vue();
const Events = Object.freeze({
    SPIN_WHEEL: 'SPIN_WHEEL'
});

export { EventBus, Events };