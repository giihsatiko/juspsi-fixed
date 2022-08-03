<?php include "header.php"; ?>
<section class="intro">
  <div class="swiper mySwiper-intro">
    <div class="swiper-wrapper">
      <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="swiper-slide">
          <div class="bg-intro">
            <div class="texto-intro">
              <h1 class="fw-900 fs-64">Terapia cognitivo comportamental</h1>
              <p class="fw-500 fs-24">Passo a passo para se tornar um excelente psicoterapeuta.</p>
              <a href="" class="botao-laranja fw-800 fs-14">CLIQUE E CONHEÇA</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
    <div class="paginacao-intro">
      <div class="intro-pagination"></div>
      <div class="setas-intro">
        <div class="intro-button-prev"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3L3 12L12 21" stroke="white" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
        <div class="intro-button-next">
          <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 3L12 12L3 21" stroke="white" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="descer">
    <a href="#categorias">
      <p class="fw-500 fs-12"></p>
      <span></span>
    </a>
  </div>
</section>

<main id="categorias">
  <div class="container-fluid">
    <div class="texto-categorias">
      <h2 class="fw-700 fs-35">PRINCIPAIS CATEGORIAS</h2>
      <p class="fw-500 fs-24">Acesse conteúdos da sua área, e experimente novos campos de atuação, expandindo as suas estratégias,
        técnicas e possibilidades de ingresso no mercado de trabalho</p>
      <!-- adicionar fonte roboto -->
    </div>
    <div class="swiper mySwiper mySwiper-categorias" id="curso-link">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="cursos-itens">
            <a href="#curso-link" class="curso-link">
              <img src="assets/images/direito.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3>Cursos de Direito</h3>
                <div class="texto-oculto">
                  <span class="faixa d-none"></span>
                  <p class="texto-aberto d-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo. Curabitur aliquam lacus sit amet
                    eleifend lacinia.</p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cursos-itens">
            <a href="#curso-link" class="curso-link">
              <img src="assets/images/psicologia.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3>Cursos de Psicologia</h3>
                <div class="texto-oculto">
                  <span class="faixa d-none"></span>
                  <p class="texto-aberto d-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo. Curabitur aliquam lacus sit amet
                    eleifend lacinia.</p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cursos-itens">
            <a href="#curso-link" class="curso-link">
              <img src="assets/images/servico-social.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3>Serviço Social</h3>
                <div class="texto-oculto">
                  <span class="faixa d-none"></span>
                  <p class="texto-aberto d-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo. Curabitur aliquam lacus sit amet
                    eleifend lacinia.</p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cursos-itens">
            <a href="#curso-link" class="curso-link">
              <img src="assets/images/cursos-preparatorios.png" alt="biblioteca" class="img-fluid">
              <div class="texto-cursos">
                <h3>Cursos Preparatórios</h3>
                <div class="texto-oculto">
                  <span class="faixa d-none"></span>
                  <p class="texto-aberto d-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                    semper, elit quam cursus nibh, sed varius nisi risus in leo. Curabitur aliquam lacus sit amet
                    eleifend lacinia.</p>
                  <div class="mais"><img src="assets/images/mais.png" alt="simbolo mais"></div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="setas-categorias d-flex d-lg-none">
        <div class="button-next-categorias"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 3L12 12L3 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
        <div class="button-prev-categorias"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3L3 12L12 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
          </svg></div>
      </div>
    </div>
    <div class="texto-categorias">
      <h2>PRINCIPAIS CURSOS</h2>
      <p>Cursos estruturados para alavancar sua carreira</p>
    </div>
    <div class="swiper mySwiper mySwiper-cursos">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="principais-cursos">
            <a href="">
              <img src="assets/images/celebro-lisinho.png" alt="cerebro">
              <div class="cursos-texto">
                <span>CURSO ONLINE</span>
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
        <div class="swiper-slide">
          <div class="principais-cursos">
            <a href="">
              <img src="assets/images/violencia-domestica.png" alt="mulher amarrada">
              <div class="cursos-texto">
                <span>CURSO ONLINE</span>
                <h4>Violência Doméstica - Protocolo de atendimento
                  e acompanhamento</h4>
                <div class="classificacao">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-cheia.png" alt="meia estrela" class="img-fluid">
                  <p>5</p>
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
                    <p>R$ <b>359,90</b></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="principais-cursos">
            <a href="">
              <img src="assets/images/ursinho.png" alt="ursinho de pelúcia">
              <div class="cursos-texto">
                <span>CURSO ONLINE</span>
                <h4>Violência Sexual Infanto-Juvenil</h4>
                <div class="classificacao">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                  <img src="assets/images/estrela-metade.png" alt="meia estrela" class="img-fluid">
                  <p>3,5</p>
                </div>
                <div class="beneficios">
                  <div>
                    <img src="assets/images/certificado-cursos.png" alt="certificado" class="img-fluid">
                    <p>Certificado 20h</p>
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
        <div class="swiper-slide">
          <div class="principais-cursos">
            <a href="">
              <img src="assets/images/raciocinio.png" alt="sla">
              <div class="cursos-texto">
                <span>CURSO ONLINE</span>
                <h4>Raciocínio técnico em psicologia</h4>
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
      </div>
      <div class="cursos-button-next"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 3L12 12L3 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
        </svg>
      </div>
      <div class="cursos-button-prev"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 3L3 12L12 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
        </svg></div>
      <div class="swiper-pagination"></div>
    </div>
    <a href="" class="botao-laranja mx-auto">VER TODOS OS CURSOS</a>
  </div>
</main>


<section class="vantagem">
  <div class="container-fluid">
    <div class="conheca-container">
      <div class="imagem-modelo">
        <img src="assets/images/modelo.png" alt="modelo">
      </div>
      <div class="texto-conheca">
        <h1>TRANSFORME SUA VIDA ATRAVÉS DOS CURSOS JUSPSI</h1>
        <div class="row">
          <div class="vantagens col-12 col-lg-6 d-flex align-items-center">
            <img src="assets/images/relogio.png" alt="relogio">
            <h3>APRENDA OS CURSOS NO SEU TEMPO</h3>
          </div>
          <div class="vantagens col-12 col-lg-6 d-flex align-items-center">
            <img src="assets/images/certificado.png" alt="certificado">
            <h3>CERTIFICADOS VÁLIDOS EM TODO O BRASIL</h3>
          </div>
        </div>
        <p>Aprenda tudo que não te ensinaram na faculdade, passo a passo na prática e alcance os melhores resultados
          profissionais</p>
        <a href="" class="botao-laranja fw-800 fs-14">CONHEÇA A JUSPSI</a>
      </div>
    </div>
  </div>

  <div class="diferenciais-container">
    <h1>DIFERENCIAS JUSPSI</h1>
    <div class="container-fluid">
      <div class="diferenciais-itens">
        <div>
          <img src="assets/images/caixa.png" alt="caixa" class="img-fluid">
          <p>Metodologia didática, prática e transformadora</p>
        </div>
        <div>
          <img src="assets/images/livro.png" alt="livro" class="img-fluid">
          <p>Trabalhamos com métodos de disciplinas multidisciplinares.</p>
        </div>
        <div>
          <img src="assets/images/quebra-cabeca.png" alt="neurociência" class="img-fluid">
          <p>Utilizamos neurociência que garante maior absorção dos conteúdos.</p>
        </div>
        <div>
          <img src="assets/images/suporte.png" alt="suporte ao aluno" class="img-fluid">
          <p>Damos suporte ao aluno para ingresso no mercado de trabalho.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="depoimentos">
  <div class="container-fluid">
    <div class="swiper mySwiper mySwiper-depoimentos">
      <div class="titulo-depoimentos">
        <div>
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
              <div class="link-depoimento">
                <a href="">> CURSO DE COACHING</a>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <a href="" class="botao-laranja fw-800 fs-14 mx-auto">VER TODOS OS DEPOIMENTOS</a>
  </div>
</section>
<?php include "footer.php"; ?>