function toggleMensaje() {
  const mensajeContenido = document.getElementById('mensajeContenido');
  if (mensajeContenido.style.display === 'none') {
    mensajeContenido.style.display = 'block';
  } else {
    mensajeContenido.style.display = 'none';
  }
}
