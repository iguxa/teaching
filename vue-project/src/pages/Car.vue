<template>
    <div>
        <h1>Car id {{id}}</h1>
        <button class="btn btn-sm btn-default" @click="goBackToCars">Back</button>
        <br>
        <router-link
                class="btn btn-info mt-2"
                tag="button"
                :to="{
                    name:'carFull',
                    params:{id},
                    query:{
                        name:'Mazda',
                        year:'2000'
                    }
                }"

        >
            Full info
        </router-link>
        <hr>
        <router-view></router-view>
    </div>

</template>

<script>
    export default {
        name: "Car",
        data(){
            return{
                //id:this.$router.currentRoute.params['id']
                id:this.$route.params['id']
            }
        },
        watch:{
            $route(toR,fromR){
                this.id = toR.params['id']
            }
        },
        methods:{
            goBackToCars(){
                this.$router.push('/cars')
            }
        }
    }
</script>

<style scoped>

</style>