let token= localStorage.getItem("token");
let tokenCard = document.querySelectorAll("input[data-token]")


tokenCard.forEach(el => {
    if (el.value== token){
        let idCard = el.getAttribute("id");
        let s = `.cross #${idCard}`;
        let cross = document.querySelector(s) //on séléctionne la croix qui a la class cross et l'id de la carte qui a le même token que dans le localStorage
        cross.style.display="inline-block"
    }
});

// à faire 
//→ rajouter une croix qui est en display none et qui a l'id de la carte