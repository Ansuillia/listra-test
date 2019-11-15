<template>
    <div>
        <h1>Cars</h1>
        <select-component cars='cars'></select-component>
    </div>
</template>

<script>
import SelectComponent from '../components/SelectComponent'
import { mapActions } from 'vuex'

export default {
    name: 'cars',
    components: {
        SelectComponent
    },
    methods: {
        ...mapActions([
            'loadCars'
        ])
    },
    mounted() {
        this.$store.dispatch('loadCars')
    }
}
</script>
