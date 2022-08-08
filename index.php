<?php include "header.php"; ?>
<?php include "intro.php"; ?>

<main id="categorias">
  <div class="container-fluid">
    <div class="texto-categorias">
      <h2 class="fw-700 fs-35">PRINCIPAIS CATEGORIAS</h2>
      <p class="fw-500 fs-24">Acesse conteúdos da sua área, e experimente novos campos de atuação, expandindo as suas estratégias,
        técnicas e possibilidades de ingresso no mercado de trabalho</p>
    </div>
    <div class="swiper mySwiper mySwiper-categorias" id="curso-link">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="cursos-itens w-100 d-block">
            <a class="curso-link">
              <img src="assets/images/direito.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3 class="d-none d-md-block">Cursos de Direito</h3>
                <div class="texto-oculto">
                <p class="d-none">
                    <span class="faixa"></span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo.
                  </p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cursos-itens w-100 d-block">
            <a class="curso-link">
              <img src="assets/images/psicologia.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3 class="d-none d-md-block">Cursos de Psicologia</h3>
                <div class="texto-oculto">
                  <p class="d-none">
                    <span class="faixa"></span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo.
                  </p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cursos-itens w-100 d-block">
            <a class="curso-link">
              <img src="assets/images/servico-social.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3 class="d-none d-md-block">Serviço Social</h3>
                <div class="texto-oculto">
                  <p class="d-none">
                    <span class="faixa"></span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo.
                  </p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cursos-itens w-100 d-block">
            <a class="curso-link">
              <img src="assets/images/cursos-preparatorios.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3 class="d-none d-md-block">Cursos Preparatórios</h3>
                <div class="texto-oculto">
                  <p class="d-none">
                    <span class="faixa"></span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo.
                  </p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="setas-categorias d-flex d-lg-none pt-3">
        <div class="categorias-button-prev"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3L3 12L12 21" stroke="white" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
        <div class="categorias-pagination position-unset d-flex justify-content-center align-items-center"></div>
        <div class="categorias-button-next">
          <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 3L12 12L3 21" stroke="white" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include "cursos.php"; ?>

<?php include "vantagem.php"; ?>

<?php include "depoimentos.php"; ?>

<?php include "footer.php"; ?>