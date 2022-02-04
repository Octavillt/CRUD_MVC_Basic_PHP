<?php //require('views/templete/header.php'); 

?>

<body>
     <main>
          <div class="container">
               <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">

                    <div class="col-md-5">
                         <div class="text-center mt-2">
                         <?php 
                         /*$insert_persona = new Persona();
                         $insert_persona -> registraPersona();*/
                         $insert_persona = Persona::registraPersona();
                         echo $insert_persona;
                         ?>
                    </div>
                    <div class="text-center mt-2">
                         <h1>Crear Persona</h1>
                    </div>
                    <form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post" action="">
                      <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                   </div>
                   <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido">
                   </div>
                   <div class="mb-3">
                        <label for="numTelefono" class="form-label">Numero Telefonico</label>
                        <input type="number" class="form-control" id="numTelefono"
                        name="numTelefono">
                   </div>
                   <div class="mb-3">
                    <label for="txtEmail" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail">
               </div>
               <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
          </form>

     </div>
</div>
</div>
</main>
</body>
<?php //require('views/templete/footer.php'); ?>
