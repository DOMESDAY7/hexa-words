let token= localStorage.getItem("token");
let tokenCard = document.querySelectorAll("input[data-token]")
let cross = document.querySelectorAll(".cross")

tokenCard.forEach(el => {
    
    if (el.getAttribute("data-token")== token){
        
        let idCard = el.getAttribute("id");
        console.log(idCard)
        let s = `lord-icon[id="${idCard}"]`;
        let cross = document.querySelector(s) //on séléctionne la croix qui a la class cross et l'id de la carte qui a le même token que dans le localStorage
        cross.style.display="inline-block"
    }
});

cross.forEach(element => {
    element.addEventListener("click",(e)=>{
        let id = e.target.getAttribute("id")
        dellCard(id)
    })
});

function dellCard(id){
    let url = "./model/dellCard.php";
    let id_card = `?id_card=${id}`;
    url = url + id_card;
    fetch(url).then(document.querySelector(`div.content_card[id="${id}"]`).style.display="none")
}