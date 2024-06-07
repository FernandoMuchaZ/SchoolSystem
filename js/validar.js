// const nombre = document.getElementById("name");
// const email = document.getElementById("email");
// const pass = document.getElementById("password");
// const pass2 = document.getElementById("password2");
// const form = document.getElementById("formu");
// const parrafo = document.getElementById("warnings");

// form.addEventListener("submit", e => {
//     e.preventDefault();
//     let warnings = "";
//     let entrar = false;
//     let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     parrafo.innerHTML = "";
//     if(nombre.value.length < 6){
//         warnings += "El nombre es muy corto <br>";
//         entrar = true;
//     }
//     console.log(regexEmail.test(email.value));
//     if(!regexEmail.test(email.value)){
//         warnings += "El email no es valido <br>";
//         entrar = true;
//     }
//     if(pass.value.length < 8){
//         warnings += "La contraseña es muy corta <br>";
//         entrar = true;
//     }
//     if(pass.value != pass2.value){
//         warnings += "Las contraseñas no coinciden <br>";
//         entrar = true;
//     }
//     if(entrar){
//         parrafo.innerHTML = warnings;
//     }else{
//         parrafo.innerHTML = "Enviado correctamente";
//     }
// });