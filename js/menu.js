/* $(document).ready(main);

var cont =1;
function main(){
    $('.hotel .fa-solid.fa-bars').click(function(){
        if(cont === 1){
            $('.menu').animate({
              left:'0'  
            });
            cont =0;
        }else{
            cont =1;
            $('.menu').animate({
                left: '-100%'
            });
        }
      
    });
}; */

function login(){
    //variable de usuario
    user=document.getElementById("correo").value
    //estructura condicional
    if(user==="Fernando@hotmail.com"){
        window.location=("./admin.php")
    //}
    //else if (user==="he@hotmail.com"){
      //  window.location=("index3.html")
    }
    else{
        alert("Usuario Incorrecto")
        document.getElementById("usu").value=""
        document.getElementById("pass").value=""
        document.getElementById("usu").focus()
    }

}

