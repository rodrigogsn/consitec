<?php $title = "Início" ?>
<?php include "./src/views/includes/head.php" ?>

<style>
   .home-slider-1 {
    background: linear-gradient(0deg,rgba(0, 59, 74, 1), rgba(0, 59, 74, 1)),
                url('./src/assets/img/sliders/slider1/bg.jpg');
    background-blend-mode: screen;
    background-size: cover;
  }

  .home-slider-2 {
    background: linear-gradient(0deg,rgba(0, 59, 74, 1), rgba(0, 59, 74, 1)),
                url('./src/assets/img/sliders/slider2/bg.jpg');
    background-blend-mode: screen;
    background-size: cover;
  }

  .home-slider-3 {
    background: linear-gradient(0deg,rgba(0, 59, 74, 1), rgba(0, 59, 74, 1)),
                url('./src/assets/img/sliders/slider3/bg.jpg');
    background-blend-mode: screen;
    background-size: cover;
  }

  .home-slider-4 {
    background: linear-gradient(0deg,rgba(0, 59, 74, 1), rgba(0, 59, 74, 1)),
                url('./src/assets/img/sliders/slider4/bg.jpg');
    background-blend-mode: screen;
    background-size: cover;
  }
</style>

<div class="home-slider">

  <div class="home-slider-container home-slider-1">
    <article class="home-slider-desc">
      <!-- <h4>01</h4> -->
      <a href="sobre">
        <h1>Consitec Engenharia e Tecnologia</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Prestes a completar 22 anos de história, a CONSITEC é uma das líderes do mercado público e privado brasileiro de contrução civil em diversos segmentos.</span>
        </p>
      </a>
    </article>
  </div>

  <div class="home-slider-container home-slider-2">
    <article class="home-slider-desc">
      <!-- <h4>02</h4> -->
      <a href="gestao-projetos">
        <h1>Inovações para a Sustentabilidade</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>As inovações atendem aos Objetivos de Desenvolvimento Sustentável (ODS) e demonstram compromisso com nossa política de sustentabilidade.</span>
        </p>
      </a>
    </article>
  </div>
  
  <div class="home-slider-container home-slider-3">
    <article class="home-slider-desc">
      <!-- <h4>03</h4> -->
      <a href="projetos">
        <h1>Garantia de Qualidade</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Desde os menores componentes até os maiores projetos, nossos especialistas garantem que tudo o que produzimos é ecologicamente amigável, fácil de manter e construído para durar.</span>
        </p>
      </a>
    </article>
  </div>
  
  <div class="home-slider-container home-slider-4">
    <article class="home-slider-desc">
      <!-- <h4>04</h4> -->
      <a href="gestao-capacitacao">
        <h1>Programa de Capacitação em Gestão e Tecnologia da Construção</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Tem o objetivo de oferecer aperfeiçoamento técnico e de gestão de obras. Os participantes discutem temas críticos do dia a dia, de forma a elevar a excelência e aprimorar a qualidade das entregas.</span>
        </p>
      </a>
    </article>
  </div>
</div>

<?php include "./src/views/includes/footer.php" ?>