<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
			if(isset($_POST['input'])){
				$name	= $_POST['name'];
				$mail= $_POST['mail'];
				$password= $_POST['password'];
				var_dump($_POST['mail']);
				exit;	
		
			$insert=true;
			if($insert){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido agregados correctamente.</div>';
			}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';
			}
				
			}
			?>
            <br>
            <blockquote>
            Agregar USUARIO
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro.php" method="POST" >
						 <!--NOMBRE|CORREO|PASSWORD -->
										<div class="control-group">
											<label class="control-label" for="name">Nombre</label>
											<div class="controls">
												<input type="text" name="name" id="name" placeholder="Ingrese un nombre" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="mail">correo</label>
											<div class="controls">
												<input type="text" name="correo" id="mail" placeholder="Ingrese el correo" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="password">Contrasena</label>
											<div class="controls">
												<input name="password" id="password" class="form-control span8 tip" type="password" placeholder="Ingrese la contrasena"  required />
											</div>
										</div>


										<div class="control-group">
											<div class="controls">
												<button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="crudusuario.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div> 
                    </div>
                </div>
            </div>

        
<br />

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
