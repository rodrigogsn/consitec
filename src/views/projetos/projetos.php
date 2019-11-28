<?php 
  $title = "Gestão de Projetos";
  $projetos_path = realpath(__DIR__."/../../projetos");
  $projetos = scandir($projetos_path);
?>
<?php include "./src/views/includes/head.php" ?>

<div class='projetos_container'>
  <?php
    foreach ($projetos as &$value) {
      if($value !== "." && $value !== ".."){
        $projeto_path = realpath($projetos_path."/".$value);
        $projeto_first_img = scandir($projeto_path)[2];
        $projeto_name = substr($value, 3);

        echo("
          <div class='projeto' style='background-image:url(\"./src/projetos/{$value}/{$projeto_first_img}\")'>
            <span>
              <label class='title'>{$projeto_name}</label>
              <label class='type'>Construção civil</label>
            </span>
          </div>
          ");
      }
    }
  ?>
</div>

<?php include "./src/views/includes/footer.php" ?>