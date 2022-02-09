<?php require('views/templete/header.php'); ?>
<?php 

if(isset($_GET['pagina'])){

     if($_GET['pagina'] == "crear_persona" || $_GET['pagina'] == "listar_personas" ||
          $_GET['pagina'] == 'editar_persona' || $_GET['pagina'] == 'eliminar_persona' ||
          $_GET['pagina'] == 'buscar_personas'){

          include "views/persona/".$_GET['pagina'].".php";
     }else{
          include "views/persona/error_404.php";
}
}else{
    include "views/persona/listar_personas.php";
}
?>

<?php //include "views/persona/listar_personas.php"; ?>

<?php require('views/templete/footer.php'); ?>
