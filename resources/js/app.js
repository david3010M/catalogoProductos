import './bootstrap';
import 'flowbite';

setTimeout(function () {
    try {
        document.getElementById('toast').classList.add('hidden');
    } catch (error) {
    }
}, 3000);