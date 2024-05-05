<template>
    <div class="flex flex-row flex-wrap justify-content-between">
        <Listbox v-model="selectedAuto" :options="autos" optionLabel="name" class="w-full md:w-14rem">
            <template #option="slotProps">
                <div class="flex align-items-center" @click="changeAuto">
                    <div>{{ slotProps.option.name }}</div>
                </div>
            </template>
        </Listbox>
        <Panel style="min-width:80%;">
            <p class="m-0" v-if="autoDetail">
                <label for="id" class="font-bold block mb-2"> ID </label>
                <div id="id">{{ autoDetail.id }}</div>
                <label for="issue" class="font-bold block mb-2"> Год выпуска </label>
                <div id="issue">{{ autoDetail.issue }}</div>
                <label for="mileage" class="font-bold block mb-2"> Пробег </label>
                <div id="mileage">{{ autoDetail.mileage }}</div>
                <label for="color" class="font-bold block mb-2"> Цвет </label>
                <div id="color">{{ autoDetail.color }}</div>
            </p>
        </Panel>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: "Index",
    data() {
        return {
            autos: [],
            selectedAuto: null,
            autoDetail: null
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
        },
        changeAuto() {
            if (this.selectedAuto !== null) {
                axios.get('/auto/'+this.selectedAuto.code).then(res => {
                    this.autoDetail = res.data.data;
                });
            }
        }
    }
}
</script>
