<template>
    <div>
        <select v-model="car" @change="setCar(car)">
            <option disabled>Selecione um carro...</option>
            <option
                v-for="{ id, description, price } in cars"
                v-bind:key="id"
                v-bind:value="{ id, description, price }"
                >{{ description }}</option
            >
        </select>
    </div>
</template>

<script>
import { mapState, mapActions } from 'vuex'

export default {
    computed: {
        ...mapState([
            'cars'
        ])
    },
    data() {
        return {
            car: null
        }
    },
    methods: {
        ...mapActions([
            'setCar'
        ])
    },

};
</script>
