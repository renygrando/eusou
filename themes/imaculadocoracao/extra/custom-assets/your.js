
//tirar hover do sharebutton
const shareButton = document.getElementsByClassName('share-icon')[0];
console.log(shareButton);
shareButton.style.color = '#fff';
shareButton.parentElement.classList.remove('button-hover');

//todos os links abrem em nova aba
const buttonsInNewTab = document.querySelectorAll('.button');
buttonsInNewTab.forEach(e => {
    e.setAttribute('target', '_blank');
});
