<template>
    <div>
        <select v-model="car">
            <option disabled>Selecione um carro...</option>
            <option
                v-for="{ id, description, price } in cars"
                v-bind:key="id"
                v-bind:value="{ id, description, price }"
                >{{ description }}</option
            >
        </select>

        <div v-if="car">
            <p>Selecionado: {{ car.description }}</p>
            <p>Price: {{ car.price }}</p>
            <fieldset>
                <legend>Parcelamento</legend>

                <label for="entrada">Entrada</label>
                <input v-model="entrada" type="number" placeholder="Entrada" id="entrada">
                <button @click="calculo = true">Calcular</button>

                <div v-if="calculo">
                    <p v-for="parcela in parcelas" v-bind:key="parcela">{{ parcela }}x de {{ (car.price - entrada) / parcela }}</p>
                </div>
            </fieldset>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'

export default {
    computed: {
        ...mapState([
            'cars'
        ])
    },
    data() {
        return {
            car: null,
            entrada: 0,
            calculo: false,
            parcelas: [6, 12, 48]
        };
    }
};
</script>
