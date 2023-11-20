function mostrar() {

  let isenha = document.getElementById("yourPassword");
  
  if (isenha.type === "password") {
      isenha.type = "text";
      // text_button.textContent = "ocultar senha";
  } else {
      isenha.type = "password";
      // text_button.textContent = "mostrar senha";
  }
}

