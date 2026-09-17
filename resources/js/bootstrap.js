import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    document.getElementById('MunuHamburguesa').addEventListener('click', function () {

        const menu = document.getElementById('contenidoMenuMovil');

        menu.classList.toggle('hidden');

    });
