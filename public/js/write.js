let namePerso = document.querySelector('.name');
let inputName = document.querySelector('.nickname');
let form=document.querySelector('.form');
let sub = document.querySelector('.submit_button');

inputName.addEventListener('keyup',function(){
    namePerso.textContent=inputName.value;
    // message.textContent="You have a too long nickname "
})
sub.addEventListener("click",()=>{
    form.submit();
})