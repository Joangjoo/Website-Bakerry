document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);

    if(urlParams.has('show_modal') && urlParams.get('show_modal') === 'true') {
        const modal = document.getElementById('myModalKasar');
        modal.classList.remove('hidden'); 
    }else if(urlParams.has('show_modal') && urlParams.get('show_modal') === 'false'){
        const modal = document.getElementById('myModalNggaKasar');
        modal.classList.remove('hidden'); 
    }
    
});



const modalKasar = document.getElementById('myModalKasar');
const cancelKasarButton = modalKasar.querySelector('button.bg-gray-700');
const confirmKasarButton = modalKasar.querySelector('button.bg-green-400');

const modalNggaKasar = document.getElementById('myModalNggaKasar');
const cancelNggaKasarButton = modalNggaKasar.querySelector('button.bg-gray-700');
const confirmNggaKasarButton = modalNggaKasar.querySelector('button.bg-green-400');

function hideModal(modal) {
    modal.classList.add('hidden');
}

cancelKasarButton.addEventListener('click', () => hideModal(modalKasar));
confirmKasarButton.addEventListener('click', () => hideModal(modalKasar));

cancelNggaKasarButton.addEventListener('click', () => hideModal(modalNggaKasar));
confirmNggaKasarButton.addEventListener('click', () => hideModal(modalNggaKasar));