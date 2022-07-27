<template>
<div>
    <h1>
        Blog di ScarpaPress
    </h1>
    <ul>
        <li v-for="post in posts" :key="post.slug">
            {{post.title}}
        </li>
    </ul>
</div>
  
</template>

<script>



export default {
    name: 'App',
    data(){
        return {
            posts: []
        }
    },

    created(){
        axios.get('http://127.0.0.1:8000/api/posts')
        .then((response) => {
            console.log(response.data);
            this.posts = response.data;
        })
        .catch((error) => {
            console.log(error);
        })
    }

}
</script>

<style>

</style>