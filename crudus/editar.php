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
                            {
           $id = intval($_GET['mail']);

			}
			?>
            
            <blockquote>
            formulario de Modificacion
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="update-edit.php" method="POST" >

										<div class="control-group">
											<label class="control-label" for="basicinput">Nombre</label>
											<div class="controls">
												<input type="text" name="nombre" id="name" value="<?php echo $row['name']; ?>" placeholder="" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Correo</label>
											<div class="controls">
												<input type="text" name="mail" id="mail" value="<?php echo $row['mail']; ?>" placeholder="Tidak perlu di isi" class="form-control span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Rol</label>
											<div class="controls">
												<input name="direccion" id="rol" value="<?php echo $row['rol']; ?>" class="form-control span8 tip" type="text"  required />
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Contraseña</label>
											<div class="controls">
												<input name="password" id="password" value="<?php echo $row['password']; ?>" class=" form-control span8 tip" type="password" disabled  />
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<input type="submit" name="update" id="update" value="Actualizar" class="btn btn-sm btn-primary"/>
                                               <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
    

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        


      
    </body>
