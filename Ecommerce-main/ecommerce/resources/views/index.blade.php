<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miyuki Geek</title>
  <link rel="stylesheet" href="C:\Users\isame\OneDrive\Documentos\MeuPc\E-commerce\Ecommerce-main\ecommerce\public\styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="min-width: 372px;">
  <!--Navegação-->
  <nav class="navbar navbar-expand-lg navbar-dark border-bottom shadow-sm mb-3 backgroundGradient">
    <div class="container"><!--Div invisivel do cabeçalho-->
      <a class="navbar-brand" href="#"><img class="Loguinho" src="imagens/MiyukiGeek.png" alt="LogoDeUmaRaposinha"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse"> <!--Elementos do collapse-->

        <ul class="navbar-nav flex-grow-1">
          <form class="d-flex divPesquisar" role="search">
            <input class="form-control me-2" type="search" placeholder="Digite o que você procura" aria-label="Search">
            <button class="btn text-white bg-danger" type="submit">Pesquisar</button>
          </form>
        </ul>

        <div class="align-self-end">
          <ul class="navbar-nav">

            <div class="collapse navbar-collapse me-3" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <button id="borderCategorias" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Categorias
                  </button>
                  <ul id="fundoDrop" class="dropdown-menu dropdown-menu-dark btn btn-danger">
                    <li><a class="dropdown-item" href="#">Figuras de ação e colecionáveis</a></li>
                    <li><a class="dropdown-item" href="#">Vestuário e acessórios</a></li>
                    <li><a class="dropdown-item" href="#">Artigos de decoração para casa</a></li>
                    <li><a class="dropdown-item" href="#">Material escolar</a></li>
                    <li><a class="dropdown-item" href="#">Livros e mangás</a></li>
                    <li><a class="dropdown-item" href="#">Produtos para animais de estimação</a></li>
                    <li><a class="dropdown-item" href="#">Produtos de papelaria</a></li>
                    <li><a class="dropdown-item" href="#">Utensílios de cozinha</a></li>
                    <li><a class="dropdown-item" href="#">Cosméticos e produtos de cuidados pessoais</a></li>
                    <li><a class="dropdown-item" href="#">Kits para cosplay e acessórios relacionados</a></li>
                    <li><a class="dropdown-item" href="#">Material para DIYn</a></li>
                    <li><a class="dropdown-item" href="#">Itens de coleção exclusivos</a></li>
                    <li><a class="dropdown-item" href="#">Alimentos e bebidas temáticos</a></li>
                    <li><a class="dropdown-item" href="#">Produtos tecnológicos</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <li class="nav-item">
              <a href="#" id="borderButton" class="nav-link text-white me-3 bg-danger">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a href="#" id="borderButton" class="nav-link text-white me-3 bg-danger">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="#" id="borderCarrito" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <!--<svg class="bootstrap-icons" width="24" height="24" fill="currentColor">
                <use xlink:href="bootstrap-icons.svg#cart3" />
              </svg>-->
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!--Slider-->
  <div class="divDestaquesDaSemana mt-4">
    <div class="destaquesDaSemana">
      <h2>Destaques da Semana</h2>
    </div>
  </div>

  <header class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" id="divJuan">
        <div class="carousel-item active">
          <a href=""><img id="Miku2Img" src="imagens/Hatsune Miku, the Muse of Creation - large.webp" class="d-block w-100 img-fluid" alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href=""><img id="Nene2Img" src="imagens/Nendoroid Momosuzu Nene - large.webp" class="d-block w-100 img-fluid" alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href=""><img id="Toki2Img" src="imagens/Toki Asuma (Bunny Girl) -large.webp" class="d-block w-100 img-fluid" alt="..."></a>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>

  <!--Cards que giram 1-->
  <div class="divDescontosSemanaisFundo">
    <div class="divDestaquesDaSemana">
      <div class="destaquesDaSemana mt-5">
        <h2>Descontos Semanais</h2>
      </div>
    </div>
    <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner innerCards CIcards">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/MoriCalliope_Cards.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$1.000,00</h5>
                  <p class="card-text">Desfrute da sua coleção com a Action Figure - Mori Calliope! Detalhes incríveis e qualidade premium. Adquira já!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/cards - Nendoroid Hatsune Miku - Harvest Moon Ver.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$99,99</h5>
                  <p class="card-text">Adquira já o Boneco Hatsune Miku! Perfeito para fãs, com detalhes incríveis e qualidade superior. Não perca!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/CardTanjiro.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$56,80</h5>
                  <p class="card-text">Conheça a Action Tanjirp! Perfeito para colecionadores, com detalhes impressionantes e qualidade superior. Compre agora!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/CardCanecaBH.jpeg" class="card-img-top" alt="...">
                <div class="card-body bg">
                  <h5 class="card-title">R$39,99</h5>
                  <p class="card-text">Colecione já as Cenecas Boku no Hero! Design incrível, alta qualidade e perfeitas para fãs. Não perca essa oportunidade!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_AI_Cosplay.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$499,80</h5>
                  <p class="card-text">Confira o cosplay da Ai de Oshi no Ko! Alta qualidade, fiel, detalhes fiéis e ideal para fãs. Garanta o seu agora!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Lente_Maquima.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$29,99</h5>
                  <p class="card-text">Experimente as lentes de contato da Maquima! Alta qualidade, conforto e estilo único. Transforme seu visual agora!.</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Adicione mais slides conforme necessário -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!--Card que giram 2-->
  <div class="divLancamentosRecentesFundo">
    <div class="divDestaquesDaSemana">
      <div class="destaquesDaSemana mt-5">
        <h2>Lançamentos Recentes</h2>
      </div>
    </div>
    <div id="cardCarousel2" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner innerCards CIcards">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Peruca_Sage.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$299,99</h5>
                  <p class="card-text">Seja Sage do Valorant com essa peruca incrível! Qualidade top para um cosplay perfeito. Transforme-se agora!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Chaveiros.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$19,99</h5>
                  <p class="card-text">Adicione estilo ao seu dia com chaveiros de Anime! Designs únicos, alta qualidade e perfeitos para fãs. Não perca!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Brincos_Tanjiro.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$29,99</h5>
                  <p class="card-text">Complete seu look com os Brincos Tanjiro! Alta qualidade, perfeitos para fãs de Demon Slayer. Não perca!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Camiseta_Loli.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$59,99</h5>
                  <p class="card-text">Vista-se com estilo com a Camiseta de Anime! Conforto e designs exclusivos para os verdadeiros fãs. Compre já!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Moletom_Anime.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R5149,99</h5>
                  <p class="card-text">Mantenha-se aquecido com o Moletom de Anime! Confortável, estiloso e perfeito para todos os fãs. Garanta o seu!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="card">
                <img src="imagens/Card_Kindred.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">R$9,99</h5>
                  <p class="card-text">Celebre sua conexão com o Colar de Metadinha dos Kindred! Design elegante e simbolismo único. Adquira o seu!</p>
                  <a href="#" class="btn btn-primary bg-danger border border-danger">Veja mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Adicione mais slides conforme necessário -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <main>
  </main>

  <!--Rodapé-->
  <footer class="border-top p-2 bg-dark text-white d-flex justify-content-center align-items-center">
    <div class="row d-flex justify-content-center align-items-center">
      <!-- Primeira Div -->
      <div class="col-md-3 text-center mt-3 me-4">
        <a href="#" onclick="window.location.reload();" style="text-decoration: none; color: white;">
          <img src="imagens/MiyukiGeek.png" class="img-fluid" alt="Imagem Recarrega Página" width="130px"
            height="130px">
        </a>
        <div class="social-links">
          <a href="#" target="_blank" class="text-white"><img src="imagens/logo-insta.png" alt="Logo Instagram"
              width="58px" height="58px"></a>
          <a href="#" target="_blank" class="text-white ml-2"><img src="imagens/Logo_Face.png" alt="Logo Instagram"
              width="50px" height="49px"></a>
          <a href="#" target="_blank" class="text-white ml-2"><img src="imagens/Logo_Twitter.png" alt="Logo Instagram"
              width="50px" height="50px"></a>
        </div>
      </div>
      <!-- Segunda Div -->
      <div class="col-md-2 mt-3 me-1 text-center bg-danger p-2 border" style="height: 150px;">
        <h5 class="text-white">Menu</h5>
        <div id="divFooter" class="text-white">
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Figures</a>
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Acessórios</a>
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Roupas</a>
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Decorações</a>
        </div>
      </div>
      <!-- Terceira Div -->
      <div class="col-md-2 mt-3 me-1 text-center bg-danger p-2 border" style="height: 150px;">
        <h5 class="text-white">Suporte</h5>
        <div class="text-white ">
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Politica de Privacidade</a>
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Termos de uso de Contato</a>
        </div>
      </div>
      <!-- Quarta Div -->
      <div class="col-md-2 mt-3 me-1 text-center bg-danger p-2 border" style="height: 150px;">
        <h5 class="text-white">Notificações</h5>
        <div class="text-white">
          <a href="#" class="text-white d-block hoverLink sem-sublinhado">Seja o primeiro a saber dos nossos novos itens!</a>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</body>

</html>
