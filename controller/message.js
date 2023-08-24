const openModalButton = document.getElementById('openModalButton');
const closeModalButton = document.getElementById('closeModalButton');
const modal = document.getElementById('myModal');

openModalButton.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

closeModalButton.addEventListener('click', () => {
    modal.classList.add('hidden');
});