let idiot = document.querySelector(".titreIdiot");
let hexa = document.querySelector(".hexa")


let str = document.querySelectorAll(".titreIdiot>span");
let cpt = 0;
setInterval(() => {
    goDown(str[cpt]);
    cpt++;
    if(cpt==str.length){
        cpt=0;
    }
}, 1000);

  


function goDown(el) {
    el.style.backgroundColor ="red"
//     el.animate([
     
//         {transform:'translateY(10px)'}

//         ], {
//             duration: 1000
//         }

//     )
// }

function goUp(el) {
    el.animate([{
            transform: 'translate(0,50%)'
        }], {
            duration: 1000
        }

    )

}