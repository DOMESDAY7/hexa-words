
let id=1;
let id_perso;
let sub=document.querySelector('.choose_button');
let form=document.querySelector(".form");
let refresh=document.querySelector("#refresh");
let rand = document.querySelector('.rand_button');
let person = document.querySelector(".person");
rand.addEventListener("click",function(){
    refresh.animate([
        {transform:"rotate(0deg)"},
        {transform:"rotate(360deg"}
    ],
    {duration:1000}
    )
    if( id<10){
        id++;
        }else{
        id=1;
        }   
    person.animate([
        {transform:"scale(1,1)"},
        {transform:"scale(1,0.75)"},
        {transform:"scale(1,1)"}
    ],
    {duration:200}
    )
    document.querySelector('.person').src=`./public/img/personnage/person${id}.svg`;
    id_perso=document.querySelector('.hide').value=id;
   
});
sub.addEventListener('click',()=>{
    form.submit();
})