<section class="depoimentos d-none d-sm-block py-5">
  <div class="container-fluid">
    <div class="swiper mySwiper mySwiper-depoimentos">
      <div class="titulo-depoimentos d-flex flex-sm-column align-self-start justify-content-between">
        <div class="text-sm-center">
          <h3>DEPOIMENTOS</h3>
          <p>Opinião de nossos alunos sobre os cursos JUSPSI</p>
        </div>
        <div class="paginacao-depoimentos">
          <div class="depoimentos-pagination"></div>
          <div class="setas-depoimentos">
            <div class="depoimentos-button-prev"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 3L3 12L12 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
              </svg></div>
            <div class="depoimentos-button-next"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 3L12 12L3 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-wrapper pt-5">
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <div class="depoimentos-item d-block w-100 mb-5">
              <span class="d-block"></span>
              <img src="assets/images/depoimento.png" alt="aluno" class="modelo-depoimento mx-auto">
              <div class="d-flex flex-column align-items-center">
                <h4>laicmonteiro</h4>
                <p>“Curso maravilhoso! Super recomendo! dias de muita troca e compartilhamento de conhecimento.
                  Parabéns psicóloga Lane por ser essa pessoa tão humana e uma profissional de extrema competência. A
                  psicologia agradece por ter você como representante da nossa categoria!”</p>
              </div>
              <a href="" class="link-depoimento">> CURSO DE COACHING</a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <a href="" class="botao-laranja fw-800 fs-14 mx-auto">VER TODOS OS DEPOIMENTOS</a>
  </div>
</section>