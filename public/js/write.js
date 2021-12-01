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
        message.textContent="Your nickname is missing";

    }else if (story.value == ""){
        message.textContent ="You have nothing to tell us !";
    }else{
        sendToApi();
    }
})

function sendToApi() {
    user_story = {
        id_perso: inputId_perso.value,
        nickname: inputName.value,
        story: story.value
    };
    fetch("sendData.php", {
        method: "POST",
        body: JSON.stringify(user_story),
        headers: {
            'Content-Type': 'json/application'
        }
    })
        .then(document.location = "?page=see")
        .catch(console.log("une erreur c'est produite"));
}
