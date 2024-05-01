<template>
    <Panel>
        <p class="m-0">
            <h1>Создание авто</h1>
            <Dropdown v-model="selectedMark" :options="marks" optionLabel="name" placeholder="Выберите марку" class="w-full md:w-14rem" />
            <Dropdown v-model="selectedModel" :options="models" optionLabel="name" placeholder="Выберите модель" class="w-full md:w-14rem" />
            <label for="issue" class="font-bold block mb-2"> Год выпуска </label>
            <InputNumber v-model="issue" inputId="issue" :min="4" :max="4" />
            <label for="mileage" class="font-bold block mb-2"> Пробег(км) </label>
            <InputNumber v-model="mileage" inputId="mileage" :min="4" :max="4" />
            <label for="color" class="font-bold block mb-2"> Цвет </label>
            <SelectButton v-model="selectedColor" :options="colors"></SelectButton>
            <div class="flex flex-wrap gap-3">
                <div class="flex align-items-center">
                    <RadioButton v-model="selectedColor" inputId="color" name="color" value="green" class="select-color-green"/>
                    <label for="color" class="ml-2">Green</label>
                    <RadioButton v-model="selectedColor" inputId="color" name="color" value="blue"/>
                    <label for="color" class="ml-2">Green</label>
                </div>
            </div>
        </p>
    </Panel>
</template>
<script>
import axios from 'axios';

export default {
    name: "Index",
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
            colors: []
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
        }
    }
}
</script>
<style>
.select-color-green {
    background-color: var(--green-400)!important;
}
.select-color-blue {
    background-color: var(--blue-500)!important;
}
</style>
