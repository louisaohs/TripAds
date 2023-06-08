import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const nickname = document.getElementById('#nickname');
const message = document.getElementById('#message');
const submitButton = document.getElementById('#submitButton');

submitButton.addEventListener('click', () => {
    console.log('test');
    axios.post('/Message', {
        nickname: nickname.value,
        message: message.value
    });
});
