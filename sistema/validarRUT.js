
function checkRut(rut) {

    var valor = rut.value.replace('.','');    // Despejar Puntos
    valor = valor.replace('-','');    // Despejar Guión
    
    cuerpo = valor.slice(0,-1);    // Aislar Cuerpo y Dígito Verificador
    dv = valor.slice(-1).toUpperCase();
    
    rut.value = cuerpo + '-'+ dv    // Formatear RUN
    

    if(cuerpo.length < 7) { rut.setCustomValidity("El RUN ingresado NO esta completo"); return false;}    // Si no cumple con el mínimo ej. (n.nnn.nnn)

    suma = 0;    // Calcular Dígito Verificador
    multiplo = 2;

    for(i=1;i<=cuerpo.length;i++) {    // Para cada dígito del Cuerpo
    
        index = multiplo * valor.charAt(cuerpo.length - i);        // Obtener su Producto con el Múltiplo Correspondiente
        
        suma = suma + index;        // Sumar al Contador General
        
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }        // Consolidar Múltiplo dentro del rango [2,7]
  
    }
    
    dvEsperado = 11 - (suma % 11);    // Calcular Dígito Verificador en base al Módulo 11
    
    dv = (dv == 'K')?10:dv;    // Casos Especiales (0 y K)
    dv = (dv == 0)?11:dv;
    
    if(dvEsperado != dv) { rut.setCustomValidity("El RUN ingresado NO es valido"); return false; } // Validar que el Cuerpo coincide con su Dígito Verificador
    
    rut.setCustomValidity(''); // Si todo sale bien, eliminar errores (decretar que es válido)
}
