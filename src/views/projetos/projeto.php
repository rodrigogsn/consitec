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

  $images_path = scandir($projeto_path."/images");
?>
<?php include "./src/views/includes/head.php" ?>

<header>
  <!-- Slideshow container -->
  <div class="slideshow-container">
    <?php
      foreach ($images_path as &$value) {
        if($value !== "." && $value !== ".."){

          echo("
            <div class='mySlides fade'>
              <img src='./src/projetos/".reset($projeto)."/images/{$value}' style='width:100%'>
            </div>
            ");
        }
      }
    ?>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <?php
      $initial = 1;
      foreach ($images_path as &$value) {
        if($value !== "." && $value !== ".."){

          echo("<span class='dot' onclick='currentSlide({$initial})'></span>");
        }
        $initial++;
      }
    ?>
  </div>
</header>

<section>
  <h1 class="project-title"><?=$projeto_nome?></h1>

  <?=$content?>
</section>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides((slideIndex = n));
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  function openMobileMenu() {
    let menu_el = $(".menu");
    menu_el.toggleClass("visible");
  }
</script>


<?php include "./src/views/includes/footer.php" ?>