<template>
    <div>
        <h4>Car name: {{$route.query.name}}</h4>
        <h5>car year: {{year}}</h5>
        <div class="scroll"></div>
        <h6 id="scroll">Hello from the bottom</h6>
        <div class="scroll"></div>

    </div>
</template>

<script>
    export default {
        name: "CarFull",
        computed:{
            year(){
                return this.$route.query.year
            }
        },
        beforeRouteEnter(to,fromR,next){
            console.log('beforeRouteEnter');
            next(true)
        }
    }
</script>

<style scoped>
    .scroll{
        width: 100px;
        height: 1000px;
        background:#ccc ;

    }
</style>