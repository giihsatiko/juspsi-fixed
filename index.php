<?php include "header.php"; ?>


  <main>
    <div class="categorias">
      <div class="texto-categorias">
        <h2>PRINCIPAIS CATEGORIAS</h2>
        <p>Acesse conteúdos da sua área, e experimente novos campos de atuação, expandindo as suas estratégias,
          técnicas e possibilidades de ingresso no mercado de trabalho</p>
      </div>
      <div class="swiper mySwiper mySwiper-categorias">
        <div class="swiper-wrapper">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="swiper-slide">
              <div class="cursos-itens">
                <a href="" class="curso-link">
                  <img src="images/direito.png" alt="biblioteca" class="img-fluid">
                  <div class="texto-cursos">
                    <h3>Cursos de Direito</h3>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod, est non venenatis
                      semper, elit quam cursus nibh, sed varius nisi risus in leo. Curabitur aliquam lacus sit amet
                      eleifend lacinia.</p>
                    <img src="images/mais.png" alt="simbolo mais" class="mais img-fluid">
                  </div>
                </a>
              </div>
            </div>
          <?php endfor; ?>
        </div>
        <div class="button-next-categorias"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 3L12 12L3 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
        <div class="button-prev-categorias"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3L3 12L12 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
          </svg></div>
      </div>
      <div class="texto-categorias">
        <h2>PRINCIPAIS CURSOS</h2>
        <p>Cursos estruturados para alavancar sua carreira</p>
      </div>
      <div class="swiper mySwiper mySwiper-cursos">
        <div class="swiper-wrapper">
          <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="swiper-slide">
              <div class="principais-cursos">
                <a href="">
                  <img src="images/cerebro.png" class="img-fluid" alt="cerebro">
                  <div class="cursos-texto">
                    <span>CURSO ONLINE</span>
                    <h4>Terapia cognitivo comportamental</h4>
                    <div class="classificacao">
                      <img src="images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                      <img src="images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                      <img src="images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                      <img src="images/estrela-cheia.png" alt="estrela cheia" class="img-fluid">
                      <img src="images/estrela-metade.png" alt="meia estrela" class="img-fluid">
                      <p>4,5</p>
                    </div>
                    <div class="beneficios">
                      <div>
                        <img src="images/certificado-cursos.png" alt="certificado" class="img-fluid">
                        <p>Certificado 4h</p>
                      </div>
                      <div>
                        <img src="images/camera-zoom.png" alt="camera" class="img-fluid">
                        <p>Zoom</p>
                      </div>
                      <div>
                        <img src="images/valor.png" alt="cifrao" class="img-fluid">
                        <p>R$ <b>99,90</b></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php endfor; ?>
        </div>
        <div class="button-next-cursos"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 3L12 12L3 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
          </svg>
        </div>
        <div class="button-prev-cursos"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3L3 12L12 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
          </svg></div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="button"><a href="">VER TODOS OS CURSOS</a></div>
    </div>
  </main>


  <aside>
    <div class="container-fluid">
      <div class="conheca-container">
        <img src="images/modelo.png" alt="modelo">
        <div class="texto-conheca">
          <h1>TRANSFORME SUA VIDA ATRAVÉS DOS CURSOS JUSPSI</h1>
          <div>
            <div class="vantagens">
              <img src="images/relogio.png" alt="relogio">
              <h3>APRENDA OS CURSOS NO SEU TEMPO</h3>
            </div>
            <div class="vantagens">
              <img src="images/certificado.png" alt="certificado">
              <h3>CERTIFICADOS VÁLIDOS EM TODO O BRASIL</h3>
            </div>
          </div>
          <p>Aprenda tudo que não te ensinaram na faculdade, passo a passo na prática e alcance os melhores resultados
            profissionais</p>
          <div class="button"><a href="">CONHEÇA A JUSPSI</a></div>
        </div>
      </div>
    </div>
    <div class="diferenciais-container">
      <h1>DIFERENCIAS JUSPSI</h1>
      <div class="container-fluid">
        <div class="diferenciais-itens">
          <div>
            <img src="images/caixa.png" alt="caixa" class="img-fluid">
            <p>Metodologia didática, prática e transformadora</p>
          </div>
          <div>
            <img src="images/livro.png" alt="livro" class="img-fluid">
            <p>Trabalhamos com métodos de disciplinas multidisciplinares.</p>
          </div>
          <div>
            <img src="images/quebra-cabeca.png" alt="neurociência" class="img-fluid">
            <p>Utilizamos neurociência que garante maior absorção dos conteúdos.</p>
          </div>
          <div>
            <img src="images/suporte.png" alt="suporte ao aluno" class="img-fluid">
            <p>Damos suporte ao aluno para ingresso no mercado de trabalho.</p>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <section>
    <div class="container-fluid">
      <div class="container-depoimentos">
        <div class="swiper mySwiper mySwiper-depoimentos">
          <div class="titulo-depoimentos">
            <div>
              <h3>DEPOIMENTOS</h3>
              <p>Opinião de nossos alunos sobre os cursos JUSPSI</p>
            </div>
            <div class="botoes-swiper">
              <div class="swiper-pagination"></div>
              <div class="setas-swiper">
                <div class="button-prev-depoimento"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 3L3 12L12 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
                  </svg></div>
                <div class="button-next-depoimento"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3L12 12L3 21" stroke="#31306C" stroke-width="3" stroke-linecap="square" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 8; $i++) : ?>
              <div class="swiper-slide">
                <div class="depoimentos-item">
                  <span></span>
                  <img src="images/depoimento.png" alt="aluno" class="img-fluid">
                  <div>
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
        <div class="button"><a href="">VER TODOS OS DEPOIMENTOS</a></div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container-sobre">
      <div class="container-fluid">
        <div class="infos">
          <div class="infos-links" id="institucional">
            <a href="#institucional"><img src="images/seta-baixo.png" alt="seta apontando para baixo" class="img-fluid">
              INSTITUCIONAL</a>
            <ul>
              <li><a href="">A empresa</a></li>
              <li><a href="">Novidades</a></li>
              <li><a href="">Materiais gratuitos</a></li>
              <li><a href="">Depoimentos</a></li>
              <li><a href="">Contato</a></li>
            </ul>
            <div class="button"><a href=""><img src="images/user.png" alt="usuario">Login | Criar conta</a></div>
          </div>
          <div class="infos-links">
            <a href="#preparatorios"><img src="images/seta-baixo.png" alt="seta apontando para baixo" class="img-fluid">CURSOS PREPARATÓRIOS</a>
            <ul>
              <li><a href="">Presenciais</a></li>
              <li><a href="">Telepresenciais</a></li>
              <li><a href="">Simulados online</a></li>
            </ul>
          </div>
          <div class="infos-links" id="coach">
            <a href="#coach"><img src="images/seta-baixo.png" alt="seta apontando para baixo" class="img-fluid">COACHING
              E INTELIGÊNCIA EMOCIONAL</a>
            <ul>
              <li><a href="">Coaching para concursos públicos</a></li>
              <li><a href="">Coaching de carreira</a></li>
              <li><a href="">Inteligência emocional</a></li>
            </ul>
          </div>
          <div class="infos-links" id="empresa">
            <a href="#empresa"><img src="images/seta-baixo.png" alt="seta apontando para baixo" class="img-fluid">PARA
              SUA EMPRESA</a>
            <div>
              <ul>
                <li class="titulo-lista"><a href="">EMPRESAS PÚBLICAS</a></li>
                <li><a href="">Cursos e treinamentos</a></li>
                <li><a href="">Assessoria técnica</a></li>
              </ul>
              <ul>
                <li class="titulo-lista"><a href="">EMPRESAS PRIVADAS</a></li>
                <li><a href="">Cursos e treinamentos</a></li>
                <li><a href="">Assessoria técnica</a></li>
              </ul>
            </div>
          </div>
          <div class="infos-links" id="cursos-link">
            <a href="#cursos-link"><img src="images/seta-baixo.png" alt="seta apontando para baixo" class="img-fluid">CURSOS</a>
            <ul>
              <ul>
                <li class="titulo-lista"><a href="">DIREITO</a></li>
                <li><a href="">Clubes de assinatura</a></li>
                <li><a href="">Cursos presenciais</a></li>
                <li><a href="">Cursos online</a></li>
              </ul>
              <ul>
                <li class="titulo-lista"><a href="">PSICOLOGIA</a></li>
                <li><a href="">Clubes de assinatura</a></li>
                <li><a href="">Cursos presenciais</a></li>
                <li><a href="">Cursos online</a></li>
              </ul>
              <ul>
                <li class="titulo-lista"><a href="">SERVIÇO SOCIAL</a></li>
                <li><a href="">Clubes de assinatura</a></li>
                <li><a href="">Cursos presenciais</a></li>
                <li><a href="">Cursos online</a></li>
              </ul>
            </ul>
          </div>
          <div class="button show-button"><a href=""><img src="images/user.png" alt="usuario">Login | Criar conta</a>
          </div>
        </div>
        <div class="certificacoes-container">
          <div>
            <div class="certificacoes">
              <h2>CERTIFICAÇÕES</h2>
              <a href="#certificados" class="seta-baixo"><img src="images/seta-preta.png" alt="seta apontando para baixo" class="img-fluid show-button"></a>
              <div class="certificacoes-itens" id="certificados">
                <a href=""><img src="images/certificacao.png" alt="logo endeavor"></a>
                <a href=""><img src="images/certificacao2.png" alt="selo great place to work"></a>
                <a href=""><img src="images/certificacao3.png" alt="logo ABF"></a>
                <a href=""><img src="images/certificacao4.png" alt="logo amazon web services"></a>
                <a href=""><img src="images/certificacao5.png" alt="logo google for education"></a>
              </div>
            </div>
            <div class="politicas-container">
              <div class="direitos">
                <img src="images/logo2.png" alt="">
                <p>2021 © Todos os direitos reservados - JUSPSI. Seja a sua melhor versão profissional | Criação <img src="images/logo-oxigenweb.png" alt="logo oxigenweb" class="img-fluid">
              </div>
              </p>
              <div class="politicas">
                <a href="">Política de privacidade</a>
                <a href="">Política de cookies</a>
              </div>
            </div>
          </div>
          <div class="subir">
            <a href="#topo">
              VOLTAR AO TOPO
              <img src="images/risco-link.png" alt="seta para subir página">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="contatos">
      <div class="container-fluid">
        <div class="whatsapp">
          <a href=""><img src="images/whatsapp-icon.png" alt="icone-whatsapp" class="img-fluid"></a>
        </div>
        <ul>
          <li><a href=""><i class="fa-brands fa-youtube fa-2x"></i></a></li>
          <li><a href=""><i class="fa-brands fa-linkedin fa-2x"></i></a></li>
          <li><a href=""><i class="fa-brands fa-facebook-f fa-2x"></i></a></li>
          <li><a href=""><i class="fa-brands fa-instagram fa-2x"></i></a></li>
          <li><a href=""><i class="fa-brands fa-twitter fa-2x"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper2 = new Swiper(".mySwiper-categorias", {
      slidesPerView: 1,
      centeredSlides: true,
      navigation: {
        nextEl: ".button-next-categorias",
        prevEl: ".button-prev-categorias",
      },
      breakpoints: {
        300: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 4,
        },
      },
    });

    var swiper3 = new Swiper(".mySwiper-cursos", {
      slidesPerView: 1,
      centeredSlides: true,
      navigation: {
        nextEl: ".button-next-cursos",
        prevEl: ".button-prev-cursos",
      },
      breakpoints: {
        300: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 4,
        },
      },
    });

    var swiper4 = new Swiper(".mySwiper-depoimentos", {
      slidesPerView: 1,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".button-next-depoimento",
        prevEl: ".button-prev-depoimento",
      },
      breakpoints: {
        300: {
          slidesPerView: 1,
        },
      },
    });
  </script>
</body>

</html>