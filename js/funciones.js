
/*** Función que permite solo Números ***/
function soloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57)) 
    event.returnValue = false;
}

/*** Validar solo letras ***/
function soloLetras() {
    if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
    event.returnValue = false;
}

function imprimir(){
    if(window.print){
        window.print();
    }
    else{
        alert("Disculpe, Su navegador no soporta esta opcion");
    }
}


