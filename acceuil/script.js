"use strict"
let idiot = document.querySelector(".titreIdiot");
// taille du navigateur
let width = window.innerWidth;
//si il s'agit d'un téléphone ce code ne sera pas pris en compte
let idiotON=false;
if (width > 800) {
    
   idiot.onmouseover=function(){
    idiotON=true;
    idiot.innerHTML="#1D1075";
   }
}
document.querySelectorAll(".button").forEach(e=>{
    e.addEventListener("click",function(){
        document.querySelector('.content').animate([{marginTop:'-100vh'}],{duration:1000});
        
    })

})

//tant que le curseur est sur l'élément ayant la class titreIdiot faire idiot.innerHTML