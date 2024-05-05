<template>
    <Listbox v-model="selectedAuto" :options="autos" optionLabel="name" class="w-full md:w-14rem" />
</template>
<script>
import axios from 'axios';

export default {
    name: "Index",
    data() {
        return {
            autos: [],
            selectedAuto: null
        }
    },
    mounted() {
        this.getAutoList();
    },
    methods: {
        getAutoList() {
            axios.get('/autos').then(res => {
                this.autos = res.data.data;
            });
        }
    }
}
</script>
