<template>
    <div class="row">
        <div class="input-field col s12 m6">
            <select v-model="car" @change="setCar(car)" ref="selectCar">
                <option value="" selected>Selecione um carro...</option>
                <option
                    v-for="{ id, description, price } in cars"
                    v-bind:key="id"
                    v-bind:value="{ id, description, price }"
                    >{{ description }}
                </option>
            </select>
            <label>Carros</label>
        </div>
        <div v-if="car" class="col s12 m6">
            <h6>Carro: <strong>{{ car.description }}</strong></h6>
            <h6>Valor: <strong>{{ car.price | decimal}}</strong></h6>
        </div>
    </div>
</template>

<script>

import { mapState, mapActions } from 'vuex'

export default {
    computed: {
        ...mapState([
            'cars',
            'loading'
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
    updated () {
        M.FormSelect.init(this.$refs.selectCar)
    }
};
</script>
