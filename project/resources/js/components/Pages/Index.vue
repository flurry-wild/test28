<template>
    <Listbox v-model="selectedAuto" :options="autos" optionLabel="name" class="w-full md:w-14rem">
        <template #option="slotProps">
            <div class="flex align-items-center" @click="changeAuto">
                <div>{{ slotProps.option.name }}</div>
            </div>
        </template>
    </Listbox>
    <Panel>
        <p class="m-0">

        </p>
    </Panel>
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
        },
        changeAuto(event) {
            if (this.selectedAuto !== null) {
                axios.get('/auto/'+this.selectedAuto.code);
            }
        }
    }
}
</script>
