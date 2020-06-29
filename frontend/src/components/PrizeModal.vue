<template>
    <div class="card">
        <div class="card-content">
            <div v-if="result!=0">
                <h1 class="title">Parabéns!!!</h1>
                <h2 class="subtitle">
                    Você acabou de ganhar <strong>{{ result }}%</strong> de desconto! Preencha seu e-mail para receber seu cupom de desconto.
                </h2>
                <b-field>
                    <b-input placeholder="E-mail" 
                        type="email" 
                        size="is-large"
                        v-model="email">
                    </b-input>
                </b-field>
                <b-button size="is-large is-primary" @click="onClick" :disabled="btnDisabled">
                    Ganhar Meu Desconto
                </b-button>
            </div>
            <div v-else>
                <h1 class="title">Tente novamente...</h1>
                <h2 class="subtitle">
                    Rode a roda novamente para tentar conquistar seu desconto!
                </h2>
            </div>
        </div>
    </div>
</template>

<script>
    import api from './../config/api';
    import { NotificationProgrammatic as Notification } from 'buefy';

    export default {
        props: {
            degree: Number
        },
        data: function() {
            return {
                email: ''
            }
        },
        computed: {
            result: function() {
                const prizes = [0, 10, 3, 5, 0, 5, 3, 10];
                const quadrant = Math.floor(this.degree/45);
                const result = prizes[quadrant];
                
                return result;
            },
            btnDisabled: function() {
                return this.email.length <= 0;
            }
        },
        methods: {
            onClick: function() {
                api.get(`/api/coupons?prize=${this.result}&email=${this.email}`)
                    .then(() => {
                        Notification.open({
                            'type': 'is-success',
                            'message': 'Seu cupom de desconto foi enviado para o seu e-mail!'
                        });
                    })
                    .catch(() => {
                        Notification.open({
                            'type': 'is-danger',
                            'message': 'Um erro ocorreu e não foi possível enviar o e-mail. Tente novamente.'
                        });
                    });

            }
        }
    }
</script>

<style>

</style>