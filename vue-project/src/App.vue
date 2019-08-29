<template>
  <div>
    <app-counter></app-counter>
    <app-car>
      <h2 slot="title">{{carName}}</h2>
      <p slot="text">Lorem 3</p>
    </app-car>
  </div>

</template>

<script>
  import Car from './Car.vue'
  import Counter from './Counter.vue'
  export default {
  name: 'app',
    data(){
      return {
        carName: 'Ford'
      }
    },
  components:{
    appCar:Car,
    appCounter:Counter
  }
}
</script>
