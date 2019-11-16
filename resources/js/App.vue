<template>
    <main>
        <nav class="nav-wrapper listra-nav blue darken-1">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <router-link to='/' class="brand-logo">
                            <img :src="'/img/listraweb.png'" class="listra-logo">
                        </router-link>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
export default {

}
</script>
