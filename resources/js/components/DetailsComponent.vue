<template>
    <div class="row">
        <div class="input-field col s12 m6">
            <money
                v-model="entrada"
                v-bind="money"></money>
            <label for="entrada">Entrada</label>
        </div>
        <div>
            <button @click="calculo = true" class="btn btn-small blue waves-effect waves-light btn-simular">Simular</button>
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
            money: {
                decimal: ',',
                thousands: '.',
                prefix: 'R$ ',
                precision: 2,
                masked: false
            }
        }
    }
}
</script>
