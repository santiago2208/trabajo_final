const nombre = document.getElementById("nombre");
const direccion = document.getElementById("direccion");
const telefono = document.getElementById("telefono");
const nit = document.getElementById("nit");
const email = document.getElementById("correo");
const producto = document.getElementById("producto");
const descripcion = document.getElementById("descripcion");
const form = document.getElementById("formulario");

const nombre_alert = document.getElementById("nombre_alert");
const direccion_alert = document.getElementById("direccion_alert");
const telefono_alert = document.getElementById("telefono_alert");
const nit_alert = document.getElementById("nit_alert");
const email_alert = document.getElementById("email_alert");
const producto_alert = document.getElementById("producto_alert");
const descripcion_alert = document.getElementById("descripcion_alert");



let val_nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
let numeros = /^-?\d+\.?\d*$/m
let val_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/






// form.addEventListener("keyup", e=>{
//      
// })


form.addEventListener("submit", e=>{

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

// direccion
if (direccion.value.length <2){
        
    direccion_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    direccion.classList.add('incorrecto')
}else  {
    direccion.classList.remove('incorrecto')
    direccion_alert.textContent = '';
}
// direccion

// telefono
if (telefono.value.length <1){
    
    telefono_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    telefono.classList.add('incorrecto')
}
else {

    if (!numeros.test(telefono.value)){

        telefono_alert.textContent = 'Solo se permite numeros';
        telefono.classList.add('incorrecto')
        e.preventDefault()

    }
    else {
        telefono.classList.remove('incorrecto')
        telefono_alert.textContent = '';
    }
}
// telefono

// nit
if (nit.value.length <1){
    
    nit_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    nit.classList.add('incorrecto')
}
else {

    if (!numeros.test(nit.value)){

        nit_alert.textContent = 'Solo se permite numeros';
        nit.classList.add('incorrecto')
        e.preventDefault()

    }
    else {
        nit.classList.remove('incorrecto')
        nit_alert.textContent = '';
    }
}
// nit

// -- -- --email
if(!val_email.test(email.value)){
    email_alert.textContent = '*El correo no es valido';
    email.classList.add('incorrecto')
    e.preventDefault()

}else  {
    email.classList.remove('incorrecto')
    email_alert.textContent = '';
    
}
// -- -- --email

// producto
if (producto.value.length <2){
        
    producto_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    producto.classList.add('incorrecto')
}else  {
    producto.classList.remove('incorrecto')
    producto_alert.textContent = '';
}
// producto

// descripcion
if (descripcion.value.length <2){
        
    descripcion_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    descripcion.classList.add('incorrecto')
}else  {
    descripcion.classList.remove('incorrecto')
    descripcion_alert.textContent = '';
}
// producto


})