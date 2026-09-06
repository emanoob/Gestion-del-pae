//Menu hamburguesa

//variables necesrias
const nav =document.querySelector("#nav");
const abrir=document.querySelector("#abrir");
let swich=false;


//funcionalidad
abrir.addEventListener("click", () =>{
    if(swich==false){
        nav.classList.add("visible");
        swich=true
    }else{
        nav.classList.remove("visible");
        swich=false
    }
    
})
