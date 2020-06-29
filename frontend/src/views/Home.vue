<template>
    <section class="section is-medium">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column">
                    <h1 class="title">Rode a roda e <br>ganhe <span class="primary-text">descontos</span>!</h1>
                    <h5 class="subtitle is-5">
                        Rode a roda e <strong>preencha seu e-mail</strong> para podermos enviar nosso cupom de desconto.
                    </h5>
                    <b-button size="is-large is-primary" @click="onClick">
                        Pegar Meu Desconto
                    </b-button>
                </div>
                <div class="column">
                    <Wheel />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Wheel from './../components/Wheel';
    import { EventBus, Events } from './../event-bus';

    export default {
        components: {
            Wheel
        },
        methods: {
            onClick: function() {
                EventBus.$emit(Events.SPIN_WHEEL);
            }
        }
    }
</script>

<style>
    .title {
        font-size: 3.5rem;
    }
    .subtitle {
        margin-top: 2rem !important;
        margin-bottom: 4rem !important;
    }
    .mt-p15 {
        margin-top: -15%;
    }
</style>