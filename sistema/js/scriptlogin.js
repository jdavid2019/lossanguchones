
document.getElementById('correoe').addEventListener('input', function() {
campo = event.target;
valido = document.getElementById('emailOK');
email = document.getElementById('correoe');
emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
//Se muestra un texto a modo de ejemplo, luego va a ser un icono
if (emailRegex.test(campo.value)) {
valido.innerText = " E-mail válido !";
//valido.style.backgroundColor = "#FB290D" fontFamily ;
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
       