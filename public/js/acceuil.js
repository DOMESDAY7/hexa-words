let idiot = document.querySelector(".titreIdiot");
let hexa = document.querySelector(".hexa");
let spans = document.querySelectorAll(".titreIdiot>span");
let cpt = 0;
let letterContent = document.querySelector(".titreIdiot")
let textIdiot = {
    hexa: ["#1", "D", "1", "0", "7", "5"],
    word: ["I", "d", "i", "o", "t", "s"]
}
let check=true;
setInterval(() => {
    let interval = setInterval(() => {
        goDown(spans[cpt]);
       setTimeout(changeLetter, 1300,spans[cpt]);
        cpt++;
        if (cpt == spans.length) {
            clearInterval(interval)
            cpt=0;
        }
    
    }, 100);
    if(check){
        check=false;
    }else{
        check=true;
    }
}, 2000);

function changeLetter(el){
    // console.log(el)
    if (check){
        let arr = Array.prototype.slice.call(spans);
        let place = arr.indexOf(el)
        el.textContent = textIdiot.word[place];
        

       
    }else{
        let arr = Array.prototype.slice.call(spans);
        let place = arr.indexOf(el)
        el.textContent = textIdiot.hexa[place]
       
    }
   
}
function goDown(el) {
    el.animate([{
        top: '0'
    }, {
        top: `${letterContent.offsetHeight}px`
    },{
        top: `${letterContent.offsetHeight*2}px`
    },{
        top: '0'
    }
], {
        duration: 500,delay:1000
    })
}
