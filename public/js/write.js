let namePerso = document.querySelector('.name');
let inputName = document.querySelector('.nickname');

inputName.addEventListener('keyup',function(){
    namePerso.textContent=inputName.value;
})