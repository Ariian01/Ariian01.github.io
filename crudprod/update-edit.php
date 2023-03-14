<?php
// Realizo la logica de guardar los datos que modifico
				if($update){
					echo "<script>alert('Los datos han sido actualizados!'); window.location = 'crudprod.php'</script>";
				}else{
					echo "<script>alert('Error, no se pudo actualizar los datos'); window.location = 'crudprod.php'</script>";
				}
  ?>