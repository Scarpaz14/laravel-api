<template>
<div class="card-post">
    <h3>{{title}}</h3>
    <div class="card-post-content">
       {{content}}
    </div>
    <router-link :to="{name: 'single-post', params:{slug:slug}}">Visualizza il post</router-link>

</div>
  
</template>

<script>
export default {
    name:'BaseCard',
    props:{
        title:{
            type: String
        },
        content:{
            type: String
        },
        slug:{
            type: String
        },

    }

}
</script>

<style lang="scss" scoped>
.card-post{
    background-color: white;
    border-radius: 0.9375rem;
    padding: 0.625rem;
    box-shadow: 0 0 5px 2px #ddd;
}

</style>