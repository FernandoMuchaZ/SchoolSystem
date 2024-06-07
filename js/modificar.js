// Definición de usuario (simulado)
const usuario = {
    nombreUsuario: 'ejemploUsuario',
    // Otros campos del usuario...
  };
  
  // Función para mostrar los detalles del usuario en la interfaz
  function mostrarDetallesUsuario() {
    document.getElementById('nombreUsuario').value = usuario.nombreUsuario;
  }
  
  // Función para modificar el usuario
  function modificarUsuario() {
    const nuevoNombreUsuario = document.getElementById('nuevoNombreUsuario').value;
  
    // Verifica que se haya ingresado un nuevo nombre de usuario
    if (nuevoNombreUsuario) {
      // Modifica el nombre de usuario
      usuario.nombreUsuario = nuevoNombreUsuario;
      alert('Nombre de usuario modificado correctamente: ' + usuario.nombreUsuario);
      mostrarDetallesUsuario();  // Actualiza la interfaz con el nuevo nombre de usuario
    } else {
      alert('Por favor, ingresa un nuevo nombre de usuario.');
    }
  }
  
  // Al cargar la página, muestra los detalles del usuario
  window.onload = mostrarDetallesUsuario;