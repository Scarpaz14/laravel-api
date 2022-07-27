<template>
    <section id="posts-section">
      <div class="container">
        <ul class="row">
          <li class="col my-3" v-for="post in posts" :key="post.slug">
              <BaseCard :title="post.title" :content="post.content" :slug="post.slug"/>
          </li>
        </ul>

      </div>
    </section>
</template>

<script>
import BaseCard from '../commons/BaseCard.vue';
export default {
  name:'PostsSection',
    data(){
        return {
            posts: []
        }
    },
    components:{
    BaseCard
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

<style lang="scss" scoped>
#posts-section{
  background-color: var( --bg-section-color);
}
ul{
  list-style: none;
}



</style>