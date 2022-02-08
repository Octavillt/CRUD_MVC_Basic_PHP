
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
                         <div class="col-md-9">
                              <div class="card">
                               <div class="card-header">Eliminar Usuario</div>
                               <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="text-center title-2">¿Esta Seguro de Eliminar al Siguiente Usuario?</h4>
                                   </div> 
                                   <hr>
                                   <div class="text-center mt-2">
                                        <?php 
                                        $DelPersona = Persona::eliminarPersona();
                                        ?>
                                   </div>
                                   <div class="form-group">
                                        <p><strong>Nombre: </strong> <?= $getPersona["nombre"];?> 
                                        <?= $getPersona["apellido"]; ?> </p>
                                   </div>
                                   <div class="form-group">
                                        <p><strong>Correo Electronico: </strong> <?= $getPersona["email"]; ?> </p>
                                   </div>
                                   <form action="" method="post" >
                                        <input type="hidden" name="idpersona" id="idpersona"
                                        value="<?= $getPersona["idpersona"]; ?>">
                                        <div class="card-footer">
                                             <button type="submit" class="btn btn-warning btn-sm">
                                                  <i class="fa fa-dot-circle-o"></i> Eliminar 
                                             </button>
                                             <a href="<?= base_url; ?>" class="btn btn-danger btn-sm">
                                             Cancelar</a>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </main>
</body>
