<template>
    <div class="card" style="width: 18rem;">
        <img src="https://www.fepecar.it/wp-content/themes/motors/assets/images/plchldr350.png" class="card-img-top">
        <div class="card-body">
            <h3 class="card-title">{{ car.brand + ' ' + car.model }}</h3>
            <h5 class="card-text">{{ car.year + ' ' + car.km }}</h5>
            <h5 class="card-text" v-for="optional in car.optionals" :key="optional.id">{{ optional.name }}</h5>
            <router-link :to="{name: 'carShow', params: {id: car.id}}" class="btn btn-primary">Show</router-link>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        car:{
            type: Object,
            required: true
        }
    }
}
</script>

<style>

</style>