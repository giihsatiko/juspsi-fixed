<section class="cursos">
  <div class="container-fluid">
    <div class="texto-categorias">
      <h2>PRINCIPAIS CURSOS</h2>
      <p>Cursos estruturados para alavancar sua carreira</p>
    </div>
    <div class="swiper mySwiper mySwiper-cursos mb-5">
      <div class="swiper-wrapper">
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <div class="principais-cursos">
              <a href="">
                <img src="assets/images/celebro-lisinho.png" alt="cerebro">
                <span class="vagas-limitadas">
                  <p>VAGAS LIMITADAS</p>
                </span>
                <span class="curso-online d-flex align-items-center justify-content-center">CURSO ONLINE</span>
                <div class="cursos-texto">
                  <h4>Terapia cognitivo comportamental</h4>
                  <div class="classificacao">
                    <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                    <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                    <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                    <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                    <img src="assets/images/estrela-metade.png" alt="meia estrela" class="img-fluid">
                    <p>4,5</p>
                  </div>
                  <div class="beneficios">
                    <div>
                      <img src="assets/images/certificado-cursos.png" alt="certificado" class="img-fluid">
                      <p>Certificado 4h</p>
                    </div>
                    <div>
                      <img src="assets/images/camera-zoom.png" alt="camera" class="img-fluid">
                      <p>Zoom</p>
                    </div>
                    <div>
                      <img src="assets/images/valor.png" alt="cifrao" class="img-fluid">
                      <p>R$ <b>99,90</b></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div class="cursos-button-prev d-none d-md-block"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="23" fill="white" stroke="white" stroke-width="2" />
          <path d="M28 16L20 24L28 32" stroke="#31306C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
      <div class="cursos-button-next d-none d-md-block"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="23" transform="rotate(-180 24 24)" fill="white" stroke="white" stroke-width="2" />
          <path d="M20 32L28 24L20 16" stroke="#31306C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>
    <a href="" class="botao-laranja mx-auto fw-800 fs-14">VER TODOS OS CURSOS</a>
  </div>
</section>