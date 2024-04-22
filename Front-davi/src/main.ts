import { createApp } from 'vue';
import { createPinia } from 'pinia';
import axios from 'axios';
import App from './App.vue';
import router from './router';
import '@mui/material/styles';


const app = createApp(App);

app.config.globalProperties.$axios = axios;

app.use(createPinia());
app.use(router);

app.mount('#app');