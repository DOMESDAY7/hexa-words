let id=1,sub=document.querySelector(".choose_button"),form=document.querySelector(".form"),refresh=document.querySelector("#refresh"),rand=document.querySelector(".rand_button"),person=document.querySelector(".person"),id_perso=document.querySelector(".hide");id_perso.value=1,rand.addEventListener("click",function(){refresh.animate([{transform:"rotate(0deg)"},{transform:"rotate(360deg"}],{duration:1e3}),id<nbphoto?id++:id=1,person.animate([{transform:"scale(1,1)"},{transform:"scale(1,0.75)"},{transform:"scale(1,1)"}],{duration:200}),document.querySelector(".person").src=`./public/img/personnage/person${id}.svg`,id_perso=document.querySelector(".hide").value=id}),sub.addEventListener("click",()=>{person.animate([{transform:"scale(1)"},{transform:"scale(1.2)"},{transform:"scale(1)"}],{duration:200}),form.submit()}),person.addEventListener("click",()=>{person.animate([{transform:"scale(1)"},{transform:"scale(1.2)"},{transform:"scale(1)"}],{duration:200}),form.submit()});