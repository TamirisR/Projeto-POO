<?php
session_start();
$_SESSION["usuario"]=true;
?>
<form action="cadastro.php" method="post">

<input type="text" name="nome">

<button type="submit">enviar</button>
</form>