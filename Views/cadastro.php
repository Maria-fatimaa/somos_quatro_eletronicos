
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title"> Cadastre-se </h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="POST">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"> Seu Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nome" id="nome"  placeholder=""/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label"> Seu Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder=""/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" name="acao" class="btn btn-primary btn-lg btn-block login-button"> Registre-se </button>
						</div>
					</form>

        <?php

            $u = new Usuarios();
            $info = $u->setUsuarios();

    ?>