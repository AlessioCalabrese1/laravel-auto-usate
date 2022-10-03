<template>
  <div>
    <section class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            <CarCard :car='car'/>
        </div>
    </div>
  </section>
  </div>
</template>

<script>
import axios from 'axios';
import CarCard from '../components/CarCard.vue';
export default {
    data: function () {
        return {
            car: {}
        };
    },
    methods: {
        getSingleCar() {
            axios.get(`/api/cars/${this.$route.params.id}`)
                .then((response) => {
                console.log(response.data.data);
                this.car = response.data.data;
            }).catch((error) => {
                console.warn(error);
            });
        },
    },
    created() {
        this.getSingleCar();
    },
    components: { CarCard }
}
</script>

<style>

</style>