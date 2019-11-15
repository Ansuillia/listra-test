<template>
    <div>
        <h1>Cars</h1>
        <select-component></select-component>
    </div>
</template>

<script>
import SelectComponent from '../components/SelectComponent'

export default {
    name: 'cars',
    components: {
        SelectComponent
    }
}
</script>
