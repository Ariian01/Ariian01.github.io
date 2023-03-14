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
				$idproducto= $_POST['idproducto'];
				$producto= $_POST['producto'];
				$precio= $_POS['precio'];
				$stock= $_POS['stock'];
				var_dump($_POST['idproducto']);
				exit;	
		

			$insert=true;
			if($insert){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido agregados correctamente.</div>';
			}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';
			}
				
			}
			?>
            
            <blockquote>
            Agregar  Producto
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registroproducto.php" method="POST" >
						 <!--idproducto|producto|precio|stock -->
										<div class="control-group">
											<label class="control-label" for="idproducto">ID Producto</label>
											<div class="controls">
												<input type="text" name="idproducto" id="idproducto" placeholder="" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="producto">producto</label>
											<div class="controls">
												<input type="text" name="producto" id="mail" placeholder="Ingrese el nombre del producto" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="precio">Precio</label>
											<div class="controls">
												<input name="precio" id="precio" class="form-control span8 tip" type="password" placeholder="Ingrese su precio"  required />
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="stock">Stock</label>
											<div class="controls">
												<input name="stock" id="stock" class="form-control span8 tip" type="password" placeholder="Ingrese la cantidad de stock"  required />
											</div>
										</div>										

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="crudprod.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
												

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
