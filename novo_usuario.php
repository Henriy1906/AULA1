<?php

?>

<form method="post" action="novo_usuario_gravar.php">
    <div><input type="text" name="nome" placeholder="Nome"></div>

    <div><input type="text" name="email" placeholder="Email"></div>

    <div><input type="text" name="user" placeholder="Usuário"></div>

    <div><input type="password" name="pass" placeholder="Senha"></div>

    <div><input type="radio" name="admin" value="1" placeholder="Admin"> Admin
    <div><input type="radio" name="admin" value="0" placeholder="Admin"> Admin(não)
    <div><input type="hidden" name="ativo" value="1"></div>


    <div><input type="submit" value="Gravar"></div>

</form>