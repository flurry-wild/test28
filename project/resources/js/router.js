import { createWebHashHistory, createRouter } from "vue-router";
import Index from './components/Pages/Index';
import Create from './components/Pages/Create';

const routes = [
    { path: '/', component: Create },
    { path: '/list', component: Index }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
});

export default router;
