let namePerso = document.querySelector('.name');
let inputName = document.querySelector('.nickname');
let form=document.querySelector('.form');
let sub = document.querySelector('.submit_button');
let story = document.querySelector(".why");
let inputId_perso = document.querySelector(".id_perso")
inputName.addEventListener('keyup',function(){
    namePerso.textContent=inputName.value;
    // if (inputName.value.length==10){
    //      message.textContent="You have a too long nickname "
    // }
   
})
sub.addEventListener("click",()=>{

    user_story ={
        id_perso: inputId_perso.value,
        nickname : inputName.value,
        story: story.value
    }
    //envoi des données avec une api a la bdd
    fetch("sendData.php",{
        
        method:"POST",
        body:JSON.stringify(user_story),
        headers:{
            'Content-Type':'json/application'
        }
    
    })
    .then(document.location="?page=see")
    .catch(console.log("une erreur c'est produite"))
    
})