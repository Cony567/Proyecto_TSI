document.addEventListener("DOMContentLoaded",()=>{
    let fecha = document.querySelector("#fecha-trabajo");

});

document.querySelector("#btn-vista-previa").addEventListener("click",()=>{
    let botonGuardar = document.querySelector("#guardar-btn");
    botonGuardar.disabled = false;
    console.log(fecha);
});
