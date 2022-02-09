<?php 
$list_personas = Persona::listarPersonas();
/*print_r('<pre>');
print_r($list_personas);*/
?>

<body>
    <main class="container shadow-none p-3 mb-9 bg-light rounded">
       <div class="row justify-content-center shadow-sm p-1 mb-3 bg-body rounded">
          <div class="col-9 mt-2">
            <form class="d-flex" method="POST" action="<?= base_url ?>?pagina=buscar_personas">
                <input class="form-control me-2" type="search" placeholder="Buscar Usuario"
                name="buscarp" id="buscarp">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <div class="text-center mt-2">
                <h1>Lista de Personas</h1>
            </div>
            <table class="table table-striped table-hover table-bordered shadow p-3 mb-5 bg-body rounded" >
              <thead>
               <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_personas as $row):   ?>
               <tr>
                 <th><?= $row['idpersona']; ?></th>
                 <td><?= $row['nombre']; ?></td>
                 <td><?= $row['apellido']; ?></td>
                 <td><?= $row['telefono']; ?></td>
                 <td><?= $row['email']; ?></td>
                 <td>
                    <a class="btn btn-warning btn-sm" href="<?= base_url ?>?pagina=editar_persona&id=<?= $row['idpersona'];?>"><i class="fas fa-user-edit fa-xs"></i></a>
                    <a class="btn btn-danger btn-sm" href="<?= base_url ?>?pagina=eliminar_persona&id=<?php
                    echo $row['idpersona'];  ?>"><i class="fas fa-user-minus fa-sm"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</div>
</main>
</body>

