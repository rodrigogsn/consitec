<?php 
  error_reporting(E_ERROR | E_PARSE);
  
  $projetos_path = realpath(__DIR__."/../../projetos");
  $projetos = scandir($projetos_path);

  $project_number = isset($_GET['project']) ? $_GET['project'] : '';

  $projeto = array_filter($projetos, function($el) use ($project_number) { return ( substr($el, 0, 2) ===  $project_number); });
  $projeto_nome = explode('-',reset($projeto))[1];

  $title = $projeto_nome;

  $projeto_path = realpath($projetos_path."/".reset($projeto));

  $content = !file_exists(file_get_contents("{$projeto_path}\content.html")) ? file_get_contents("{$projeto_path}\content.html") : '';
?>
<?php include "./src/views/includes/head.php" ?>

<section>
  <h1><?=$projeto_nome?></h1>

  <?=$content?>
</section>


<?php include "./src/views/includes/footer.php" ?>