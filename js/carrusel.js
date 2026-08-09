const grande=document.querySelector('.grande')
const punto=document.querySelectorAll('.punto')


punto.forEach((cadaPunto,i) => {
    punto[i].addEventListener("click", () =>{
        let position=i;
        let porcentaje=100/punto.length
        let operacion=i* -porcentaje;
        grande.style.transform ='translateX('+operacion+'%)'

        punto.forEach(( cadaPunto, i)=>{
            punto[i].classList.remove('activo')
        })
        punto[i].classList.add('activo')
    })

    
});