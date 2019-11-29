<?php $title = "Início" ?>
<?php include "./src/views/includes/head.php" ?>

<style>
  .home-slider, .home-slider-container {
    width: -webkit-fill-available;
    height: -webkit-fill-available;
  }

  .home-slider a,
  .home-slider a:link,
  .home-slider a:visited,
  .home-slider a:hover,
  .home-slider a:active {
    text-decoration: none;
  }

  .home-slider-desc {
    position: absolute;
    bottom: 0;
  }

  .home-slider-desc h4 {
    font-family: "Roboto Mono", sans-serif;
    font-style: italic;
    font-weight: bold;
    font-size: 300px;
    color: #d73228;
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    margin: 0 -60px;

    /* Avoid User Selection */
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
    -khtml-user-select: none; /* Konqueror HTML */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
    user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
  }

  .home-slider-desc h1 {
    background: #d73228;
    color: #003b4a;
    padding: 20px;
    font-family: "Roboto Mono", sans-serif;
    font-size: 3vw;
    text-transform: uppercase;
    font-weight: bold;
  }

  .home-slider-desc p {
    max-width: 25vw;
    background: #003b4a;
    padding: 10px;
    font-size: 14px;
    line-height: 16px;
    color: white;
  }

  .home-slider-desc span:nth-child(2) {
    width: auto;
    display: block;
    padding: 10px 25px 10px 10px;
  }

  .home-slider-desc i {
    position: relative;
    color: #d73228;
    float: right;
  }

  .home-slider-1 {
    background: linear-gradient(0deg,rgba(0, 59, 74, 1), rgba(0, 59, 74, 1)),
                url('./src/sliders/slider1/bg.jpg');
    background-blend-mode: screen;
    background-size: cover;
  }

  .slick-list,
  .slick-track {
    height: -webkit-fill-available !important;
  }
</style>

<div class="home-slider">

  <div class="home-slider-container home-slider-1">
    <article class="home-slider-desc">
      <h4>01</h4>
      <a href="#">
        <h1>Consitec Engenharia e Tecnologia</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Prestes a completar 22 anos de história, a CONSITEC é uma das líderes do mercado público e privado brasileiro de contrução civil em diversos segmentos.</span>
        </p>
      </a>
    </article>
  </div>

  <div class="home-slider-container home-slider-1">
    <article class="home-slider-desc">
      <h4>01</h4>
      <a href="#">
        <h1>Consitec Engenharia e Tecnologia</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Prestes a completar 22 anos de história, a CONSITEC é uma das líderes do mercado público e privado brasileiro de contrução civil em diversos segmentos.</span>
        </p>
      </a>
    </article>
  </div>
  
  <div class="home-slider-container home-slider-1">
    <article class="home-slider-desc">
      <h4>01</h4>
      <a href="#">
        <h1>Consitec Engenharia e Tecnologia</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Prestes a completar 22 anos de história, a CONSITEC é uma das líderes do mercado público e privado brasileiro de contrução civil em diversos segmentos.</span>
        </p>
      </a>
    </article>
  </div>
  
  <div class="home-slider-container home-slider-1">
    <article class="home-slider-desc">
      <h4>01</h4>
      <a href="#">
        <h1>Consitec Engenharia e Tecnologia</h1>
        <p>
          <span><i class="fa fa-external-link-alt"></i></span>
          <span>Prestes a completar 22 anos de história, a CONSITEC é uma das líderes do mercado público e privado brasileiro de contrução civil em diversos segmentos.</span>
        </p>
      </a>
    </article>
  </div>
</div>

<?php include "./src/views/includes/footer.php" ?>