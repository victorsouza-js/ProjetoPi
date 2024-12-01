import './bootstrap';
import { createApp } from 'vue';
import router from './router';
import App from './App.vue';
import './css/style.css';
import './css/cadastro.css';

createApp(App).use(router).mount('#app');
