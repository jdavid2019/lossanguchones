document.getElementById('nombres').addEventListener('input', function() {
  campo = event.target;
  nombre = document.getElementById('nombreOK');
  nombreRegex = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
  if (nombreRegex.test(campo.value)) {
    nombre.innerText = " Nombre válido !";
    nombre.style.color = "#100604";
    nombre.style.fontFamily='Bahnschrift';
    campo.style.color="#100604";
  } else {
    nombre.innerText = "Nombre inválido";
    nombre.style.color = "#FB290D";
    nombre.style.fontFamily='Bahnschrift';
    campo.style.color="#FB290D";
    return false;
  }
  });

document.getElementById('apellidos').addEventListener('input', function() {
  campo = event.target;
  nombre = document.getElementById('apeOK');
  nombreRegex = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
  if (nombreRegex.test(campo.value)) {
    nombre.innerText = "Apellidos válidos!";
    nombre.style.color = "#100604";
    nombre.style.fontFamily='Bahnschrift';
    campo.style.color="#100604";
  } else {
    nombre.innerText = "Apellidos inválidos";
    nombre.style.color = "#FB290D";
    nombre.style.fontFamily='Bahnschrift';
    campo.style.color="#FB290D";
    return false;
  }
  });

/*document.getElementById('dni').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('dniOK');
  dni = document.getElementById('dni');
  dniRegex =/^\d{8}(?:[-\s]\d{4})?$/;
    
  if (dniRegex.test(campo.value)) {
    valido.innerText = " DNI válido !";
    valido.style.color = "#100604";
    valido.style.fontFamily='Bahnschrift SemiBold';
    campo.style.color="#100604";
  } else {
    valido.innerText = "DNI inválido";
    valido.style.color = "#FB290D";
    valido.style.fontFamily='Bahnschrift SemiBold';
    campo.style.color="#FB290D";
    return false;
  }
  });*/

document.getElementById('correoe').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('emailOK');
  email = document.getElementById('correoe');
  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (emailRegex.test(campo.value)) {
    valido.innerText = " E-mail válido !";
    valido.style.color = "#100604";
    valido.style.fontFamily='Bahnschrift SemiBold';
    campo.style.color="#100604";
   } else {
    valido.innerText = "E-mail inválido";
    valido.style.color = "#FB290D";
    valido.style.fontFamily='Bahnschrift SemiBold';
    campo.style.color="#FB290D";
    return false;
  }
  });