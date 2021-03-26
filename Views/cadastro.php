
<!-- Aqui que irão implementar a view de formulário cadastro -->

<form id="form"  method="POST">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required \>
        <input type="text" name="email" id="email" placeholder="Digite seu e-mail" required \>
        <input type="submit" name="acao" value="Enviar" />
</form>

<?php

    $u = new Usuarios();
    $info = $u->setUsuarios();

?>