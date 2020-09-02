<template>
    <p>Hello</p>
</template>
<script>
export default {
    data(){
        return{

        }
    },
    methods: {
        loadData(){
            axios.get('/api/test').then((res) => {
                console.log(res);
            });
        }
    },
    created(){
        this.loadData();
    }
}
</script>