require('./bootstrap');

require('alpinejs');


const selector = document.querySelector('#pictureSelector')
const preview = document.querySelector('#preview_link')

selector.addEventListener('change', e => {    
    preview.src = URL.createObjectURL(selector.files[0])
});

