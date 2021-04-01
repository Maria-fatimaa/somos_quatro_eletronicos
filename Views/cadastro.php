
<form id="form"  method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Seu nome" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email" required>
  </div>  
  <button type="submit" name="acao" class="btn btn-primary">Enviar</button>
</form>

<?php

    $u = new Usuarios();
    $info = $u->setUsuarios();
	echo $info;

?>