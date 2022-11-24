const referencia = document.getElementById("referencia");
const cantidad = document.getElementById("cantidad");
const valor = document.getElementById("valor");
const nombre = document.getElementById("nombre");
const form = document.getElementById("formulario");


const referencia_alert = document.getElementById("referencia_alert");
const cantidad_alert = document.getElementById("cantidad_alert");
const valor_alert = document.getElementById("valor_alert");
const nombre_alert = document.getElementById("nombre_alert");


let val_nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
let numeros = /^-?\d+\.?\d*$/m
let val_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/






// form.addEventListener("keyup", e=>{
//      
// })


form.addEventListener("submit", e=>{


//referencia
if (referencia.value.length <1){
        
    referencia_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    referencia.classList.add('incorrecto');
}else {
    referencia.classList.remove('incorrecto');
    referencia_alert.textContent = '';
}
//referencia

// cantidad
if (cantidad.value.length <1){

    cantidad_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    cantidad.classList.add('incorrecto');

}else {

    if (!numeros.test(cantidad.value)){
        e.preventDefault()
        cantidad_alert.textContent = 'Solo se permite numeros';
        cantidad.classList.add('incorrecto')
        

    }
    else {
        cantidad.classList.remove('incorrecto')
        cantidad_alert.textContent = '';
    }
}

// cantidad

// valor
if (valor.value.length <1){

    valor_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    valor.classList.add('incorrecto');

}else {

    if (!numeros.test(valor.value)){
        e.preventDefault()
        valor_alert.textContent = 'Solo se permite numeros';
        valor.classList.add('incorrecto')
        

    }
    else {
        valor.classList.remove('incorrecto')
        valor_alert.textContent = '';
    }
}

// valor

//nombre
if (nombre.value.length <1){
        
    nombre_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    nombre.classList.add('incorrecto')
}
else {

    if (!val_nombre.test(nombre.value)){

        nombre_alert.textContent = 'Solo se permite texto';
        nombre.classList.add('incorrecto')
        e.preventDefault()

    }

    else {
        nombre.classList.remove('incorrecto')
        nombre_alert.textContent = '';
    }
}
// nombre
})