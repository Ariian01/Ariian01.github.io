<!DOCTYPE html>
<html lang="en">
<head>
    <head>
      <?php include("head.php");?>
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
                            {
           $id = intval($_GET['idproducto']);

			}
			?>
            
            <blockquote>
            formulario de Modificacion
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="update-edit.php" method="POST" >
										<div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" name="idproducto" id="idproducto" value="<?php echo $row['idproducto']; ?>" placeholder="Tidak perlu di isi" class="form-control span8 tip" readonly="readonly">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">producto</label>
											<div class="controls">
												<input type="text" name="producto" id="producto" value="<?php echo $row['producto']; ?>" placeholder="" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Precio</label>
											<div class="controls">
												<input type="number" name="Precio" id="Precio" value="<?php echo $row['Precio']; ?>" placeholder="" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Stock</label>
											<div class="controls">
												<input name="stock" id="stock" value="<?php echo $row['stock']; ?>" class="form-control span8 tip" type="stock"  required />
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
        
        <!--/.wrapper-->

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        


      
    </body>
