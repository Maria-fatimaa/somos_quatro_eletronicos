<div class="mydiv">
  <form id="form" method="POST">
    <div class="form-group">
      <label for="email">Endereço de e-mail:</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="">
    
    </div>
    <div class="form-group">
      <label for="nome"> Seu Nome:</label>
      <input type="nome" class="form-control" name="nome" id="nome" placeholder="">
    </div>
    
    <input type="submit" class="btn btn-primary" name= "acao" value="Enviar"/>
  </form>
</div>

<?php

    $u = new Usuarios();
    $info = $u->setUsuarios();

?>