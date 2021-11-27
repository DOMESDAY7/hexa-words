
document.querySelectorAll(".content_user").forEach(e=>{
    e.addEventListener("click",function(){
        document.querySelector(".content_story").style.display="inline-block";
        document.querySelector(".content_user").style.borderRadius="10px 10px 0 0";
        console.log("test")
    })
})