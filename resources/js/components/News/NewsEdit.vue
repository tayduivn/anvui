<template>
<section>
    <NewsCreate :data="data"></NewsCreate>
</section>
</template>

<script>

import NewsCreate from './NewsCreate'; 

export default {
    components: {NewsCreate},
    data: function() {
        return {
            data: {
                title: "aaaaaaaaa"
            },
        }
    },
    created(){
        this.getNewsById();
    },
    methods: {
        getNewsById() {
            let id = this.$route.params.id;

            axios.get(`http://localhost/web/web_anvui/public/api/news/${id}`)
            .then((response) => {
                this.data = response.data; 
            })
        }
    }
}
</script>

<style>

</style>