
let person=[1,2,3,4,5,6,7,8,9,10];
let id=0;
document.querySelector('.rand').addEventListener("click",function(){
    
    document.querySelector('.person').setAttribute("src",`./personnage/person${person[id]}.svg`);
    id++;
});