<template>
    <div class="main">
        <select-component></select-component>
        <details-component v-if="car"></details-component>
    </div>
</template>

<script>
import SelectComponent from '../components/SelectComponent'
import DetailsComponent from '../components/DetailsComponent'
import { mapActions, mapState } from 'vuex'

export default {
    name: 'cars',
    components: {
        SelectComponent,
        DetailsComponent
    },
    computed: {
        ...mapState([
            'car'
        ])
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
