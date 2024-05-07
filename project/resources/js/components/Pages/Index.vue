<template>
    <div class="flex flex-row flex-wrap justify-content-between">
        <Listbox v-model="selectedAuto" :options="autos" optionLabel="name" class="w-full md:w-14rem" @change="showAuto" />
        <Panel style="min-width:80%;">
            <p class="m-0" v-if="autoDetail">
                <div class="m-5">
                    <label for="id" class="font-bold block mb-2"> ID </label>
                    <div id="id">{{ autoDetail.id }}</div>
                </div>

                <div class="m-5">
                    <label for="issue" class="font-bold block mb-2"> Год выпуска </label>
                    <InputNumber v-model="autoDetail.issue" inputId="issue" :min="1980" :max="maxIssue" />
                </div>

                <div class="m-5">
                    <label for="mileage" class="font-bold block mb-2"> Пробег </label>
                    <InputNumber v-model="autoDetail.mileage" inputId="mileage" :min="0" :max="999999999" />
                </div>

                <div class="m-5">
                    <label for="color" class="font-bold block mb-2"> Цвет </label>
                    <SelectButton v-model="autoDetail.color" :options="colors" inputId="color" class="autoColor"></SelectButton>
                </div>

                <span class="m-5">
                    <Button label="Сохранить" icon="pi pi-check" @click="updateAuto"/>
                </span>

                <div class="m-5">
                    <Button icon="pi pi-times" severity="danger" aria-label="Cancel" @click="deleteAuto"/>
                </div>
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
            autoDetail: null,
            maxIssue: new Date().getFullYear(),
            colors: []
        }
    },
    mounted() {
        this.getAutoList();
        this.getLists();
    },
    methods: {
        getAutoList() {
            axios.get('/autos').then(res => {
                this.autos = res.data.data;
                this.selectedAuto = this.autos[0];
                this.showAuto();
            });
        },
        showAuto() {
            if (this.selectedAuto != null) {
                axios.get('/auto/'+this.selectedAuto.code).then(res => {
                    this.autoDetail = res.data.data;
                });
            }
        },
        deleteAuto() {
            axios.delete('/auto/'+this.selectedAuto.code).then(res => {
                this.getAutoList();
            })
        },
        getLists() {
            axios.get('/lists').then(res => {
                this.colors = res.data.data.colors;
            });
        },
        updateAuto() {
            axios.patch('auto/'+this.selectedAuto.code, {
                issue: this.autoDetail.issue,
                mileage: this.autoDetail.mileage,
                color: this.autoDetail.color,
                model_id: this.autoDetail.model_id
            }).then(res => {
                this.showAuto();
            })
        }
    }
}
</script>
