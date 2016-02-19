<?php
function logout() {
// Unset all session values(Desacivar todos losvalores de sesion)
$_SESSION = array();
// get session parameters(obtener los parametros de sesion)
$params = session_get_cookie_params();
// Delete the actual cookie.
setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"],
$params["secure"], $params["httponly"]);
// Destroy session
session_destroy();
}
