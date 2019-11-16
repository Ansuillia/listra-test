<template>
    <div class="row">
        <div class="input-field col s12 m6 l4">
            <input v-model="entrada" type="text" id="entrada">
            <label for="entrada">Entrada</label>
        </div>
        <div class="col s12 m6 l2">
            <button @click="calculo = true" class="btn btn-small blue waves-effect waves-light btn-simular">Simular</button>
        </div>
        <div class="divider"></div>
        <div v-if="calculo" class="section">
            <div class="col s12 center">
                <h5><strong>Valores simulados para você</strong></h5>
            </div>
            <div class="col s12 center">
                <p v-for="parcela in parcelas" v-bind:key="parcela" class="flow-text">{{ parcela }}x de {{ (car.price - entrada) / parcela }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'

export default {
    computed: {
        ...mapState([
            'car'
        ])
    },
    data () {
        return {
            entrada: null,
            parcelas: [48, 12, 6],
            calculo: 0
        }
    }
}
</script>
