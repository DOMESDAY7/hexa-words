let idiot = document.querySelector(".titreIdiot");
let hexa = document.querySelector(".hexa");
let str = document.querySelectorAll(".titreIdiot>span");
let cpt = 0;
let content_titre= document.querySelector(".content_titre")
let textIdiot = {
    hexa: ["1", "D", "1", "0", "7", "5"],
    word: ["I", "d", "i", "o", "t", "s"]
}
let interval = setInterval(() => {
    goDownChangeLetter(str[cpt]);
    
    cpt++;
    if (cpt == str.length) {
        clearInterval(interval)
    }

}, 200);

function goDownChangeLetter(el) {
    // el.style.backgroundColor ="red"
    console.log(el)
    el.animate([{
                top: '0'
            },
            {
                top: //taille du conteneur titre
            }

        ], {
            duration: 500
        }

    )
   
    setTimeout(() => {
        // el.textContent = textIdiot.hexa[cpt]
        el.style.top="80px"
    }, 499);
    // el.animate([{
    //             top: '80px'
    //         },
    //         {
    //             top: '0'
    //         }

    //     ], {
    //         duration: 1000
    //     }

    // )

}