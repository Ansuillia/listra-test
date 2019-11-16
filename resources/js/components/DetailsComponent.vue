<template>
    <div class="row">
        <div class="input-field col s12 m6">
            <money
                v-model="entrada"
                v-bind="money"
                @change.native="validaEntrada"></money>
            <label for="entrada" class="active">Entrada</label>
        </div>
        <div class="col s12 m6">
            <button @click="calculo = true" class="btn btn-small blue waves-effect waves-light btn-simular" :disabled="entradaMaxima">Simular</button>
        </div>
        <div class="col s12">
            <small v-if="entradaMaxima" class="red-text darken-2">O valor máximo de entrada deve ser o mesmo valor do carro</small>
        </div>
        <div v-if="calculo" class="section">
            <div class="col s12 center">
                <h5><strong>Valores simulados para você</strong></h5>
            </div>
            <div class="col s12 center">
                <p v-for="parcela in parcelas" v-bind:key="parcela" class="flow-text">{{ parcela }}x de {{ (car.price - entrada) / parcela | decimal}}</p>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'
import {Money} from 'v-money'

export default {
    components: {Money},
    computed: {
        ...mapState([
            'car'
        ])
    },
    data () {
        return {
            entrada: 0.00,
            parcelas: [48, 12, 6],
            calculo: 0,
            entradaMaxima: false,
            money: {
                decimal: ',',
                thousands: '.',
                prefix: 'R$ ',
                precision: 2,
                masked: false
            }
        }
    },
    methods: {
        validaEntrada() {
            if (this.entrada > this.car.price) {
                this.entradaMaxima = true;
                this.calculo = false;
            } else {
                this.entradaMaxima = false;
            }
        }
    }
}
</script>
