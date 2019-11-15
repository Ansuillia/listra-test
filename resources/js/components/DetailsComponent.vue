<template>
    <div v-if="car">
        <p>{{ car.description }}</p>
        <p>{{ car.price }}</p>
        <fieldset>
            <legend>Parcelamento</legend>

            <label for="entrada">Entrada</label>
            <input v-model="entrada" type="number" id="entrada">
            <button @click="calculo = true">Calcular</button>

            <div v-if="calculo">
                <p v-for="parcela in parcelas" v-bind:key="parcela">{{ parcela }}x de {{ (car.price - entrada) / parcela }}</p>
            </div>
        </fieldset>
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
            parcelas: [6, 12, 24],
            calculo: 0
        }
    }
}
</script>
