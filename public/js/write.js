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
    let textNickname = inputName.value;
    textNickname = cleanData(textNickname);
    let textStory = story.value;
    textStory = cleanData(textStory);
    user_story = {
        id_perso: inputId_perso.value,
        nickname: textNickname,
        story: textStory
    };
    console.log(user_story)
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
function cleanData(string){
    string = string.replace(/[']/g, " \'");
    string = string.replace(/["]/g, "\"");
    return string;
}
