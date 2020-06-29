<template>
    <div>
        <img class="play-button" src="../assets/images/play-button.png">
        <figure class="image">
            <img :class="css" :style="inline" src="../assets/images/wheels-mod.png">
        </figure>
    </div>
</template>

<script>
    import { EventBus, Events } from './../event-bus';
    import Helpers from './../utils/Helpers';
    import PrizeModal from './../components/PrizeModal';

    export default {
        data: function() {
            return {
                rotate: 0,
                transition: true
            }
        },
        created: function() {
            EventBus.$on(Events.SPIN_WHEEL, () => {
                this.transition = true;
                let _self = this;

                const deg = Helpers.getRandom(5400, 7200);
                const numLaps = deg / 360;
                const result = (numLaps - Math.floor(numLaps)) * 360;
                _self.rotate = deg;
                
                setTimeout(function() {
                    setTimeout(function() {
                        _self.$buefy.modal.open({
                            parent: _self,
                            component: PrizeModal,
                            props: {
                                degree: result
                            },
                            onCancel: function() {
                                _self.transition = false;
                                _self.rotate = 0;
                            }
                        });
                    }, 500);
                }, 3000);
            });
        },
        computed: {
            inline: function() {
                return {
                    transform: `rotate(${this.rotate}deg)`
                }
            },
            css: function() {
                return {
                    wheel: this.transition
                }
            }
        }
    }
</script>

<style>
    .wheel {
       transition: all 3s; 
    }
    .play-button {
        z-index: 1;
        max-width: 10%;
        height: auto;
        position: relative;
        top: 20px;
    }
</style>