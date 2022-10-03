<template>
  <section class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            <CarCard class="col-3" v-for="car in cars" :key="car.id" :car='car'/>
        </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
import CarCard from '../components/CarCard.vue';
export default {
    data: function () {
        return {
            cars: [],
        };
    },
    methods: {
        getAllCars() {
            axios.get("/api/cars")
                .then((result) => {
                console.log(result.data.data.data);
                this.cars = result.data.data.data;
            }).catch((error) => {
                console.log(error);
            });
        }
    },
    created() {
        this.getAllCars();
    },
    components: { CarCard }
}
</script>

<style>

</style>