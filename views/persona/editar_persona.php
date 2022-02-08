<?php
     //print_r($_GET['id']);
$getPersona = Persona::getPersona();
     /*print_r("<pre>");
     print_r($actualiUsuario);*/
?>
<body>
     <main>
          <div class="container">
               <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">

                    <div class="col-md-5">
                         <div class="text-center mt-2">
                              <?php 
                              $upPersona = Persona::actualizarPersona();
                              ?>
                         </div>
                         <div class="text-center mt-2">
                              <h1>Actualizar Persona</h1>
                         </div>
                         <form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post" action="">
                           <div class="mb-3">
                             <label for="txtNombre" class="form-label">Nombre(s)</label>
                             <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                             value="<?= $getPersona["nombre"]; ?>">
                        </div>
                        <div class="mb-3">
                             <label for="txtApellido" class="form-label">Apellidos</label>
                             <input type="text" class="form-control" id="txtApellido" name="txtApellido"
                             value="<?= $getPersona["apellido"]; ?>">
                        </div>
                        <div class="mb-3">
                             <label for="numTelefono" class="form-label">Numero Telefonico</label>
                             <input type="number" class="form-control" id="numTelefono"
                             name="numTelefono" value="<?= $getPersona["telefono"]; ?>">
                        </div>
                        <div class="mb-3">
                         <label for="txtEmail" class="form-label">Correo Electronico</label>
                         <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="<?= $getPersona["email"]; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar <i class="fas fa-save"></i></button>
               </form>
          </div>
     </div>
</div>
</main>
</body>
