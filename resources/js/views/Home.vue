<template>
    <div>
        <div class="row">
            <div class="col s12 m8">
                <h4>Algumas tecnologias utilizadas:</h4>
                <div class="divider"></div>
                <ul class="collection with-header">
                    <li class="collection-header"><h5>Laravel</h5></li>
                    <li class="collection-item">Migrations</li>
                    <li class="collection-item">Resources</li>
                    <li class="collection-item">Factory</li>
                    <li class="collection-item">Middleware</li>
                    <li class="collection-header"><h5>Vue.js</h5></li>
                    <li class="collection-item">Vuex</li>
                    <li class="collection-item">Router</li>
                </ul>
            </div>
            <div class="col s12 m4">
                <h4>Observações</h4>
                <div class="divider"></div>
                <p class="flow-text">
                    Para esse teste eu optei por gerar views embarcadas e um app Vue.js separado.
                </p>
                <div class="row">
                    <div class="col s12">
                        <router-link to='/cars' class="btn blue col s12">Acessar Teste Embarcado</router-link>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <a href="https://github.com/Ansuillia/listra-test-app-vue" class="btn blue darken-3 col s12">Repositório com Aplicativo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'home'
}
</script>

<style lang="scss">
    .body {
        background-color: black;
        height: 100vh;
    }
</style>
