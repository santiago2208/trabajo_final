const nombre = document.getElementById("nombre");
const documento = document.getElementById("documento");
const email = document.getElementById("correo");
const direccion = document.getElementById("direccion");
const telefono = document.getElementById("telefono");
const form = document.getElementById("formulario");


const nom_alert = document.getElementById("nom_alert");
const documento_alert = document.getElementById("documento_alert");
const email_alert = document.getElementById("email_alert");
const direccion_alert = document.getElementById("direccion_alert");
const telefono_alert = document.getElementById("telefono_alert");


let val_nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
let numeros = /^-?\d+\.?\d*$/m
let val_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/






// form.addEventListener("keyup", e=>{
//      
// })


form.addEventListener("submit", e=>{
  
//nombre
if (nombre.value.length <1){
        
    nom_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    nombre.classList.add('incorrecto')
}
else {

    if (!val_nombre.test(nombre.value)){

        nom_alert.textContent = 'Solo se permite texto';
        nombre.classList.add('incorrecto')
        e.preventDefault()

    }

    else {
        nombre.classList.remove('incorrecto')
        nom_alert.textContent = '';
    }
}
// nombre

// documento
if (documento.value.length <1){

    documento_alert.textContent = '*campo obligatorio';
    e.preventDefault()
    documento.classList.add('incorrecto')

}
else {

    if (!numeros.test(documento.value)){

        documento_alert.textContent = 'Solo se permite numeros';
        documento.classList.add('incorrecto')
        e.preventDefault()

    }
    else {
        documento.classList.remove('incorrecto')
        documento_alert.textContent = '';
    }
}
// documento

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
})