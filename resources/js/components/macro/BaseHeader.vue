<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Blog Logo</h1>
            </div>
            <div class="col">
                <nav>
                    <ul class="d-flex">
                        <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                        <li class="mx-3"><router-link :to="{ name: 'about' }">Chi Siamo</router-link></li>
                        <li><a href="/admin/home">Area Utente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
  
</template>

<script>
export default {
    name: 'BaseHeader'
}
</script>

<style lang="scss" scoped>

ul{
    list-style: none;
}


</style>