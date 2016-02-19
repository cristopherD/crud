function formhash(form, password) {
//Create a new element input, this will be our hashed password field.(este será nuestro campo de contraseñas encriptado)
var p = document.createElement("input");
// Add the new element to our form.(añadir un nuevo elemento a nuestro formulario)
form.appendChild(p);
p.name = "psha";
p.type = "hidden";
p.value = hex_sha512(password.value);
//Make sure the plaintext password doesn't get sent(Asegurarse de que la contraseña en texto plano no consigue enviado)
password.value = "";
// Finally submit the form.
form.submit();
}

