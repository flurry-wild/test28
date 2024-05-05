<template>
    <Panel>
        <p class="m-0">
            <h1>Создание авто</h1>
            <Dropdown v-model="selectedMark" :options="marks" optionLabel="name" placeholder="Выберите марку" class="w-full md:w-14rem" />
            <Dropdown v-model="selectedModel" :options="models" optionLabel="name" placeholder="Выберите модель" class="w-full md:w-14rem" />
            <label for="issue" class="font-bold block mb-2"> Год выпуска </label>
            <InputNumber v-model="issue" inputId="issue" :min="1980" :max="maxIssue" />
            <label for="mileage" class="font-bold block mb-2"> Пробег(км) </label>
            <InputNumber v-model="mileage" inputId="mileage" :min="0" :max="999999999" />
            <label for="color" class="font-bold block mb-2"> Цвет </label>
            <SelectButton v-model="selectedColor" :options="colors" class="blue-50"></SelectButton>
            <Button type="button" label="Создать" icon="pi pi-search" @click="storeAuto" class="m-5"/>
        </p>
    </Panel>
</template>
<script>
import axios from 'axios';

export default {
    name: "Create",
    data() {
        return {
            selectedMark: null,
            marks: [],
            selectedModel: null,
            models: [],
            issue: null,
            //issues: []
            mileage: null,
            selectedColor: null,
            colors: [],
            maxIssue: new Date(). getFullYear()
        }
    },
    mounted() {
        this.getLists();
    },
    methods: {
        getLists() {
            axios.get('/lists').then(res => {
                this.marks = res.data.data.marks;
                this.models = res.data.data.models;
                this.colors = res.data.data.colors;
                //this.issues = res.data.data.issues;
            });
        },
        storeAuto() {
            axios.post('/auto', {
                model_id: this.selectedModel.code,
                issue: this.issue,
                mileage: this.mileage,
                color: this.selectedColor
            }).then(res => {
                ;
            });
        }
    }
}
</script>
<style>
.p-selectbutton > div:nth-child(1n) {
    background-color: var(--red-500)!important;
}
.p-selectbutton > div:nth-child(2n) {
    background-color: var(--green-500)!important;
}
.p-selectbutton > div:nth-child(3n) {
    background-color: var(--blue-500)!important;
}

</style>
