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

                <select v-model="parcela">
                    <option
                        v-for="{ value, label } in parcelas"
                        v-bind:key="value"
                        v-bind:value="{ value, label }"
                        >{{ label }}</option
                    >
                </select>

                <div v-if="parcela">
                    <p>{{ (car.price - entrada) / parcela.value }}</p>
                </div>
            </fieldset>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cars: [
                { id: 1, description: "Car 1", price: 120000.45 },
                { id: 2, description: "Car 2", price: 35245.50 },
                { id: 3, description: "Car 3", price: 370000.98 },
                { id: 4, description: "Car 4", price: 25300 },
                { id: 5, description: "Car 5", price: 88560 }
            ],
            car: null,
            parcelas: [
                { value: 6, label: "6 vezes" },
                { value: 12, label: "12 vezes" },
                { value: 24, label: "24 vezes" }
            ],
            entrada: 0,
            parcela: null
        };
    }
};
</script>
