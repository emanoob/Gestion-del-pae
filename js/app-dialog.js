const botonesVer = document.querySelectorAll('.ver');


botonesVer.forEach(function(boton){
    console.log("hola")

    boton.addEventListener('click', function(){
        
        const id = this.dataset.id;
        const name = this.dataset.nombre;
        const cedula= this.dataset.cedu;
        const platosEntr= this.dataset.plentr;
        const fecha= this.dataset.fecha;
        const hora= this.dataset.hora;
        const desperdicios= this.dataset.desper;

        document.querySelector('#ver-inf-id').textContent= id;
        document.querySelector('#ver-inf-nom').textContent= name;
        document.querySelector('#ver-inf-ced').textContent= cedula;
        document.querySelector('#ver-inf-plt').textContent= platosEntr;
        document.querySelector('#ver-inf-fecha').textContent= fecha;
        document.querySelector('#ver-inf-hora').textContent= hora;
        document.querySelector('#ver-inf-desper').textContent= desperdicios;

        document.querySelector('.app-ver-inf').showModal();
    })
})

const cerrar_ver=document.querySelector('.cerrar-dialog-ver');

cerrar_ver.addEventListener('click', function(){
    console.log("click");
    document.querySelector('.app-ver-inf').close()
})





const botonesActualizar = document.querySelectorAll('.update');

botonesActualizar.forEach(function(boton){
    console.log("hola")

    boton.addEventListener('click', function(){
        const id = this.dataset.id;
        const platosEntr= this.dataset.plentr;
        const fecha= this.dataset.fecha;
        const hora= this.dataset.hora;
        const desperdicios= this.dataset.desper;

        document.querySelector('#plt-update').placeholder= platosEntr;
        document.querySelector('#fecha-update').value= fecha;
        document.querySelector('#hora-update').value= hora;
        document.querySelector('#desper-update').placeholder= desperdicios;
        document.querySelector('#IDD2').value= id;

        document.querySelector('.app-update-inf').showModal();
    })
})

const cerrar_update=document.querySelector('.cerrar-dialog-update');

cerrar_update.addEventListener('click', function(){
    document.querySelector('.app-update-inf').close()
})




const buton_abrir_regist=document.querySelector('.buton-abrir-regist');
const buton_cerrar_regist=document.querySelector('.buton-cerrar-regist');


buton_abrir_regist.addEventListener('click', function(){
    document.querySelector('.app-regist-inf').showModal();
})

buton_cerrar_regist.addEventListener('click', function(){
    document.querySelector('.app-regist-inf').close();
})
