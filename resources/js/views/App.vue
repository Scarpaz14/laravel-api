<template>
<div>
    <BaseHeaderVue/>
    <BaseMainVue/>
    <BaseFooterVue/>
</div>
  
</template>

<script>
import BaseHeaderVue from '../components/macro/BaseHeader.vue';
import BaseMainVue from '../components/macro/BaseMain.vue';
import BaseFooterVue from '../components/macro/BaseFooter.vue';



export default {
    name: 'App',
    components: {
        BaseHeaderVue,
        BaseMainVue,
        BaseFooterVue
    },
}
</script>

<style>

</style>