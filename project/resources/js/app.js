import { createApp } from 'vue';

import App from './components/Pages/Index.vue';
import router from './router';
import store from './store';

import Panel from 'primevue/panel';
import Dropdown from 'primevue/dropdown';
import InputNumber from 'primevue/inputnumber';
import SelectButton from 'primevue/selectbutton';
import RadioButton from 'primevue/radiobutton';

import PrimeVue from 'primevue/config';

import 'bootstrap';
import 'primevue/resources/themes/md-light-indigo/theme.css';
import 'primevue/resources/primevue.css';
import 'primeflex/primeflex.css';

const main = createApp(App);

main.component('Panel', Panel);
main.component('Dropdown', Dropdown);
main.component('InputNumber', InputNumber);
main.component('SelectButton', SelectButton);
main.component('RadioButton', RadioButton);

main.use(store);
main.use(router);

main.use(PrimeVue);

main.mount("#app");
