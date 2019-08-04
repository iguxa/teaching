<template>
  <div>
    <h1>{{carName}}</h1>


    <app-counter></app-counter>
    <app-car
            :carName="carName"
            :carYear="carYear"
            :changeFunc="changNameToAudi"
            @nameChanged="carName = $event"
    ></app-car>
  </div>

</template>

<script>
  import Car from './Car.vue'
  import Counter from './Counter.vue'
  export default {
  name: 'app',
  data () {
    return {
      carName:'Ford',
      carYear: 2018,
      //counter:0
    }
  },
  methods:{
   changNameToAudi(){
     this.carName = 'Audi'
   }
  },
  components:{
    appCar:Car,
    appCounter:Counter
  }
}
</script>