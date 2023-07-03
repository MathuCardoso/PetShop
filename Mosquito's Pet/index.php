<?php
require_once("Connection.php");
$conn = Connection::getConnection();

$login = 'Fazer Login';

session_start();

if (isset($_SESSION['user'])) {
  $login = $_SESSION['user'];
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
  <title>Mosquito's Pet</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>

<body>

  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container-fluid">
      <h1 class="m-0" style="width: 150px;">
        <img src="assets/Logo/Mosquito's Pet Shop.png" style="width: 65%;" alt="">
      </h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Novidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promoção</a>
          </li>
          <li class="nav-item">
            <a class="nav-link login" href="login.php">Bem-vindo de volta, <span id="userName"><?php echo $login; ?></span></a>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto" aria-label="Pesquisar">
          <button class="btn btns btn-outline-light rounded-0" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100 img-fluid" src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/EP_Banner-rotativo-Instituciona1920-x-550-ALIMENTOS.png" alt="">
      </div>
      <div class="carousel-item">
        <img class="w-100 img-fluid" src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/EP_Banner-rotativo-Instituciona-1920x550_CAT.png">
      </div>
      <div class="carousel-item">
        <img class="w-100 img-fluid" src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/EP_Banner-rotativo-Instituciona-1920x550_DOG.png">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

  <h2 class="text-center my-3 my-xl-5">Busque por categoria:</h2>

  <div class="container row mx-auto">

    <div class="col-4 col-sm-4 col-md-2 col-xl-2">
      <div class="card rounded-0 border-0 w-100 categoria">
        <img src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/PetShop-Departamentos4.png" alt="Petisco animal">
        <div class="card-header bg-primary text-bg-dark">
          <p class="text-center card-text">
            Petiscos
          </p>
        </div>
      </div>
    </div>

    <div class="col-4 col-sm-4 col-md-2 col-xl-2">
      <div class="card rounded-0 border-0 w-100 categoria">
        <img src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/PetShop-Departamentos5.png" alt="Brinquedo de gato">
        <div class="card-header bg-primary text-bg-dark">
          <p class="text-center card-text">
            Brinquedo
          </p>
        </div>
      </div>
    </div>

    <div class="col-4 col-sm-4 col-md-2 col-xl-2">
      <div class="card rounded-0 border-0 w-100 categoria">
        <img src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/PetShop-Departamentos3.png" alt="Caixa para pet">
        <div class="card-header bg-primary text-bg-dark">
          <p class="text-center card-text">
            Caixas
          </p>
        </div>
      </div>
    </div>

    <div class="col-4 col-sm-4 col-md-2 col-xl-2 mt-3 mt-md-0">
      <div class="card rounded-0 border-0 w-100 categoria">
        <img src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/PetShop-Departamentos2.png" alt="Cachorro com óculos muito estiloso">
        <div class="card-header bg-primary text-bg-dark">
          <p class="text-center card-text">
            Cachorros
          </p>
        </div>
      </div>
    </div>

    <div class="col-4 col-sm-4 col-md-2 col-xl-2 mt-3 mt-md-0">
      <div class="card rounded-0 border-0 w-100 categoria">
        <img src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/PetShop-Departamentos1.png" alt="Gato.">
        <div class="card-header bg-primary text-bg-dark">
          <p class="text-center card-text">
            Gatos
          </p>
        </div>
      </div>
    </div>

    <div class="col-4 col-sm-4 col-md-2 col-xl-2 mt-3 mt-md-0">
      <div class="card rounded-0 border-0 categoria">
        <img src="https://images.tcdn.com.br/files/1128337/themes/29/img/settings/PetShop-Departamentos7.png"alt="Shampoo para pet">
        <div class="card-header bg-primary text-bg-dark">
          <p class="text-center card-text">
            Limpeza
          </p>
        </div>
      </div>
    </div>

  </div>

  <h2 class="container text-center my-3 my-xl-5">Produtos em alta!</h2>

  <div class="container mb-5 d-none d-sm-none d-md-block d-lg-block d-lg-block d-xl-block d-xxl-block">
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 1 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_racao_brusky_premium_caes_adultos_20_kg_1705_1_78433fcdca9c33a2adce8e51b20a4e29.jpg">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Ração Brusky">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_racao_brusky_premium_caes_adultos_20_kg_1705_1_78433fcdca9c33a2adce8e51b20a4e29.jpg">
                    <input type="hidden" name="produto_descricao" value="Ração Premimum Cães Adultos 20 kg">
                    <input type="hidden" name="produto_preco" value="R$150,00">
                    <h5 class="card-title fw-bold">Ração Brusky</h5>
                    <p class="card-text d-none d-md-block">Ração Premimum Cães Adultos 20 kg</p>
                    <p class="fw-bold">R$150,00</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 2 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_casinha_plastica_iglu_para_caes_n_06_black_new_furacao_pet_5781_1_6774be65829b857c3dd47453d1566452.jpg">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Casinha Plástica Iglu">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_casinha_plastica_iglu_para_caes_n_06_black_new_furacao_pet_5781_1_6774be65829b857c3dd47453d1566452.jpg">
                    <input type="hidden" name="produto_descricao" value="Casinha Plástica Iglu para Cães n° 06 Black Furacão Pet">
                    <input type="hidden" name="produto_preco" value="R$320,00">
                    <h5 class="card-title fw-bold">Casinha Plástica Iglu</h5>
                    <p class="card-text d-none d-md-block">Casinha Plástica Iglu para Cães n° 06 Black Furacão Pet</p>
                    <p class="fw-bold">R$320,00</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                  </form>
                </div>
              </div>
            </div>


            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 3 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_sany_cat_toylet_felino_chalesco_5747_1_1bb0273e2bcc7be036ea972c6d34def5.jpg">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Toylet Felino">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_sany_cat_toylet_felino_chalesco_5747_1_1bb0273e2bcc7be036ea972c6d34def5.jpg">
                    <input type="hidden" name="produto_descricao" value="Sany Cat Toylet Felino - Chalesco">
                    <input type="hidden" name="produto_preco" value="R$120,00">
                    <h5 class="card-title fw-bold">Toylet Felino</h5>
                    <p class="card-text d-none d-md-block">Sany Cat Toylet Felino - Chalesco</p>
                    <p class="fw-bold">R$120,00</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 4 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_atrativo_sanitario_goodpet_20_ml_mundo_animal_1529_1_2a4e8d60428e5ef5b821f19c3beb03fc.jpg">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Atrativo Sanitário">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_atrativo_sanitario_goodpet_20_ml_mundo_animal_1529_1_2a4e8d60428e5ef5b821f19c3beb03fc.jpg">
                    <input type="hidden" name="produto_descricao" value="Goodpet Atrativo Sanitário Para Cães Filhotes 20 mL">
                    <input type="hidden" name="produto_preco" value="R$19,90">
                    <h5 class="card-title fw-bold">Atrativo Sanitário</h5>
                    <p class="card-text d-none d-md-block">Goodpet Atrativo Sanitário Para Cães Filhotes 20 mL</p>
                    <p class="fw-bold">R$19,90</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 5 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_comedouro_caes_inox_duplo_n_04_1_9_l_chalesco_5745_1_c26b93b0b1a8fd21b842b0cd4148c0b2.jpg" alt="">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Comedouro Cães">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_comedouro_caes_inox_duplo_n_04_1_9_l_chalesco_5745_1_c26b93b0b1a8fd21b842b0cd4148c0b2.jpg">
                    <input type="hidden" name="produto_descricao" value="Comedouro Cães Inox Duplo n° 04 / 1,9 L - Chalesco">
                    <input type="hidden" name="produto_preco" value="R$83,90">
                    <h5 class="card-title fw-bold">Comedouro Cães</h5>
                    <p class="card-text d-none d-md-block">Comedouro Cães Inox Duplo n° 04 / 1,9 L - Chalesco</p>
                    <p class="fw-bold">R$83,90</p>
                    <button type="submit" class="btn-comprar btns botao-lilas rounded-0 border-0">Comprar</button>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 6 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_tapete_gelado_60x90_cm_chalesco_5755_1_d44b274e2fccb5f8793ccbe740211733.jpg" alt="">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Tapete Gelado">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_tapete_gelado_60x90_cm_chalesco_5755_1_d44b274e2fccb5f8793ccbe740211733.jpg">
                    <input type="hidden" name="produto_descricao" value="Tapete Gelado 60x90 cm - Chalesco">
                    <input type="hidden" name="produto_preco" value="R$159,90">
                    <h5 class="card-title fw-bold">Tapete Gelado</h5>
                    <p class="card-text d-none d-md-block">Tapete Gelado 60x90 cm - Chalesco</p>
                    <p class="fw-bold">R$159,90</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 7 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_tapete_higienico_super_secao_baby_60x55_cm_30_unidades_petix_5763_1_63e796113339d36183468a437ed7a69c.jpg" alt="">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Tapete Higiênico">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_tapete_higienico_super_secao_baby_60x55_cm_30_unidades_petix_5763_1_63e796113339d36183468a437ed7a69c.jpg">
                    <input type="hidden" name="produto_descricao" value="Tapete Higiênico Super Secao Baby 60x55 cm 30 unidades">
                    <input type="hidden" name="produto_preco" value="R$159,90">
                    <h5 class="card-title fw-bold">Tapete Higiênico</h5>
                    <p class="card-text d-none d-md-block">Tapete Higiênico Super Secao Baby 60x55 cm 30 unidades</p>
                    <p class="fw-bold">R$159,90</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
              <!-- Produto 8 -->
              <div class="card">
                <img class="w-75" src="https://images.tcdn.com.br/img/img_prod/1128337/180_sache_sabor_party_mix_cordeiro_carne_suina_e_carne_40_g_friskies_5851_1_0bf72dbdcd85b61eaf94f24506232732.jpg" alt="">
                <div class="card-body">
                  <form method="GET" action="compra.php">
                    <input type="hidden" name="produto_nome" value="Sachê sabor Party Mix">
                    <input type="hidden" name="produto_imagem" value="https://images.tcdn.com.br/img/img_prod/1128337/180_sache_sabor_party_mix_cordeiro_carne_suina_e_carne_40_g_friskies_5851_1_0bf72dbdcd85b61eaf94f24506232732.jpg">
                    <input type="hidden" name="produto_descricao" value="TSachê sabor Party Mix (Cordeiro e Carne Suína) 40 g">
                    <input type="hidden" name="produto_preco" value="R$159,90">
                    <h5 class="card-title fw-bold">Sachê sabor Party Mix</h5>
                    <p class="card-text d-none d-md-block">TSachê sabor Party Mix (Cordeiro e Carne Suína) 40 g</p>
                    <p class="fw-bold">R$159,90</p>
                    <button type="submit" class="btn-comprar rounded-0 border-0">Comprar</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <button class="carousel-control-prev btn-seta-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next btn-seta-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

  </div>

  <div class="container d-md-none d-lg-none d-xl-none d-xxl-none mb-5">
    <div id="productCarouselSm" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row d-flex justify-content-center align-items-center">
            <!-- Produto 1 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_racao_brusky_premium_caes_adultos_20_kg_1705_1_78433fcdca9c33a2adce8e51b20a4e29.jpg" alt="Imagem do Produto 1">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Ração Brusky</h5>
                  <p class="card-text">Ração Premimum Cães Adultos 20 kg</p>
                  <p class="fw-bold">R$150,00</p>
                  <a href="#" class="btn btns btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 2 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_casinha_plastica_iglu_para_caes_n_06_black_new_furacao_pet_5781_1_6774be65829b857c3dd47453d1566452.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Casinha Plástica Iglu</h5>
                  <p class="card-text">Casinha Plástica Iglu para Cães n° 06 Black Furacão Pet</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 3 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_sany_cat_toylet_felino_chalesco_5747_1_1bb0273e2bcc7be036ea972c6d34def5.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Toylet Felino</h5>
                  <p class="card-text">Sany Cat Toylet Felino - Chalesco</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 4 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_atrativo_sanitario_goodpet_20_ml_mundo_animal_1529_1_2a4e8d60428e5ef5b821f19c3beb03fc.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Atrativo Sanitário</h5>
                  <p class="card-text">Goodpet Atrativo Sanitário Para Cães Filhotes 20 mL</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns  btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 5 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_comedouro_caes_inox_duplo_n_04_1_9_l_chalesco_5745_1_c26b93b0b1a8fd21b842b0cd4148c0b2.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Comedouro Cães</h5>
                  <p class="card-text">Comedouro Cães Inox Duplo n° 04 / 1,9 L - Chalesco</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 6 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_tapete_gelado_60x90_cm_chalesco_5755_1_d44b274e2fccb5f8793ccbe740211733.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Tapete Gelado</h5>
                  <p class="card-text">Tapete Gelado 60x90 cm - Chalesco</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 7 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_tapete_higienico_super_secao_baby_60x55_cm_30_unidades_petix_5763_1_63e796113339d36183468a437ed7a69c.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Tapete Higiênico</h5>
                  <p class="card-text">Tapete Higiênico Super Secao Baby 60x55 cm 30 unidades</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns btn-primary botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item">
          <div class="row">

            <!-- Produto 8 -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card w-100">
                <img class="w-100" src="https://images.tcdn.com.br/img/img_prod/1128337/180_sache_sabor_party_mix_cordeiro_carne_suina_e_carne_40_g_friskies_5851_1_0bf72dbdcd85b61eaf94f24506232732.jpg">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Sachê sabor Party Mix</h5>
                  <p class="card-text">TSachê sabor Party Mix (Cordeiro e Carne Suína) 40 g</p>
                  <p class="fw-bold">R$320,00</p>
                  <a href="#" class="btn btns botao-lilas rounded-0 border-0">Comprar</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#productCarouselSm" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#productCarouselSm" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>



  <section class="pb-4 bg-black text-bg-dark">

    <h2 class="text-center py-3">Conheça todas as nossas facilidades</h2>

    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 px-3">
      <div class="divs-facilidades d-flex align-items-center justify-content-center">
        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Pix Tooltip">
          <div>
            <div class="mb-1 verde-limao bold-message">PAGUE PELO PIX</div>
            <div>Ganhe 5% OFF em
              pagamentos via PIX</div>
          </div>
          <div><i class="bi bi-x-diamond fs-1"></i></div>
        </button>
      </div>

      <div class="divs-facilidades d-flex align-items-center justify-content-center">
        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Pix Tooltip">
          <div>
            <div class="mb-1 bold-message">TROCA GRÁTIS</div>
            <div>Fique livre para trocar em até 30 dias.</div>
          </div>
          <div><i class="bi bi-arrow-repeat fs-1"></i></div>
        </button>
      </div>

      <div class="divs-facilidades d-flex align-items-center justify-content-center">
        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Pix Tooltip">
          <div>
            <div class="mb-1 bold-message">ENTREGA RÁPIDA</div>
            <div>Entregamos em até 2 dias!</div>
          </div>
          <div><i class="bi bi-truck fs-1"></i></div>
        </button>
      </div>
    </div>

  </section>

  <form class="container my-3 my-xl-5 p-3 text-center div-novidades mx-auto">
    <h5>
      Quer receber nossas novidades, promoções exclusivas e 10% OFF na primeira
      compra? Cadastre-se!
    </h5>

    <div class="input-group my-3">
      <input type="email" class="form-control border-secondary rounded-0" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail" aria-describedby="button-addon2" />
      <button type="button" class="btn btns btn-primary rounded-0 border-0 " id="button-addon2">Enviar</button>
    </div>
  </form>

  <footer class="text-center bg-black text-bg-dark">
    <p class="card-text ftp py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido para a disciplina de Frameworks do
      professor Jefferson | IFPR Campus Foz do Iguaçu</p>

    <div class="redes">
      <div class="insta rede-icon">
        <a href="https://www.instagram.com/mathu.cardoso/" target="_blank">
          <i class="bi bi-instagram"></i>
        </a>
      </div>

      <div class="git rede-icon">
        <a href="https://github.com/MathuCardoso/PetShop/tree/main" target="_blank">
          <i class="bi bi-github"></i>
        </a>
      </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>