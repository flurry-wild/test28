<template>
    <Button type="button" label="Список" icon="pi pi-list" @click="redirectOnList" class="m-2"/>
    <Panel>
        <p class="m-0">
            <h1>Создание авто</h1>

            <Dropdown v-model="selectedMark" :options="marks" optionLabel="name" placeholder="Выберите марку" class="w-full md:w-14rem" @change="reloadModels" />
            <Dropdown v-model="selectedModel" :options="models" optionLabel="name" placeholder="Выберите модель" class="w-full md:w-14rem" />

            <div class="m-5">
                <label for="issue" class="font-bold block mb-2"> Год выпуска </label>
                <InputNumber v-model="issue" inputId="issue" :min="1980" :max="maxIssue" />
            </div>

            <div class="m-5">
                <label for="mileage" class="font-bold block mb-2"> Пробег(км) </label>
                <InputNumber v-model="mileage" inputId="mileage" :min="0" :max="999999999" />
            </div>

            <div class="m-5">
                <label for="color" class="font-bold block mb-2"> Цвет </label>
                <SelectButton v-model="selectedColor" :options="colors" inputId="color" class="autoColor"></SelectButton>
            </div>

            <div class="m-5">
                <Button type="button" label="Создать" icon="pi pi-search" @click="storeAuto" class="m-5"/>
            </div>
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
                this.colors = res.data.data.colors;
            });
        },
        storeAuto() {
            axios.post('/auto', {
                model_id: this.selectedModel.code,
                issue: this.issue,
                mileage: this.mileage,
                color: this.selectedColor
            });
        },
        reloadModels() {
            axios.get('/models?mark_id='+this.selectedMark.code).then(res => {
                this.models = res.data.data;
            });
        },
        redirectOnList() {
            document.location.href = '/#/list';
        }
    }
}
</script>
