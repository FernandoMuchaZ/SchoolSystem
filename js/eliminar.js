function eliminarFila(button) {
    // Obtén la fila a la que pertenece el botón
    var fila = button.parentNode.parentNode;
    
    // Obtén la tabla a la que pertenece la fila
    var tabla = fila.parentNode;
    
    // Elimina la fila de la tabla
    tabla.removeChild(fila);
  }