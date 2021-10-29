
let id=1;
let id_perso;
document.querySelector('.rand_button').addEventListener("click",function(){
    if( id<10){
        id++;
        }else{
        id=1;
        }   
    document.querySelector('.person').setAttribute("src",`./personnage/person${id}.png`);
    id_perso=document.querySelector('.hide').value=id;
   
});