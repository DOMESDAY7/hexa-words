let namePerso = document.querySelector('.name');
let inputName = document.querySelector('.nickname');
let form=document.querySelector('.form');
let sub = document.querySelector('.submit_button');
let story = document.querySelector(".why");
let inputId_perso = document.querySelector(".id_perso")
let message = document.querySelector(".message")
inputName.addEventListener('keyup',function(){
    namePerso.textContent=inputName.value;
})
sub.addEventListener("click",()=>{
    if (inputName.value == ""){
        message.textContent="Give us a little name";

    }else if (story.value == ""){
        message.textContent ="You have nothing to tell us ?! Are you sure ? ";
    }else{
        form.submit();
       
    }
})

