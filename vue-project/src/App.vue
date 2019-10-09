<template xmlns:v-colored="http://www.w3.org/1999/xhtml">
  <div class="container pt-2">
    <div class="form-group">
      <label for="name">Car name</label>
      <input
              type="text"
              id="name"
              class="form-control"
              v-model.trim="carName"
      >
    </div>
    <div class="form-group">
      <label for="year">Car name</label>
      <input
              type="text"
              id="year"
              class="form-control"
              v-model.number="carYear"
      >
    </div>
    <button
      class="btn btn-success"
      @click="createCar"
    >
      Create Car
    </button>
    <button
            @click="LoadCar"
            class="btn btn-primary"
    >
      Load Cars
    </button>
    <hr>
    <ul class="list-group">
      <li
              class="list-group-item"
              v-for="car in cars"
              :key="car.id"
      >
        <b>{{car.name}}</b> - {{car.year}}
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    data(){
      return {
        carName:'',
        carYear: 2018,
        cars:[]
      }
    },
    methods:{
      createCar(){
        const car = {
          name:this.carName,
          year:this.carYear
        };
        this.$http.post('http://localhost:3000/cars',car)
                .then(response=>{
                  return response.json()
                })
                .then(newCar=>{
                  console.log(newCar)
                })
      },
      LoadCar(){
        this.$http.get('http://localhost:3000/cars')
                .then(response=>{
                  return response.json()
                })
                .then(cars=>{
                  this.cars = cars;
                })

      },
    }


  }
</script>

<style scoped>

</style>
