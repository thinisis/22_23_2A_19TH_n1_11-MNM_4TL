const pageContent = document.querySelector('.page-content');
const modal = document.querySelector('#checkout_modal');

function showBlur() {
  pageContent.classList.add('blur');
}

function hideBlur() {
  pageContent.classList.remove('blur');
}

modal.addEventListener('show.bs.modal', showBlur);
modal.addEventListener('hidden.bs.modal', hideBlur);
