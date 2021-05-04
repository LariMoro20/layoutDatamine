
<body>
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
<div class="divlogo">
<!-- wrapper -->
<div class="container">
    <div class="row">
    <div class="col-md-4">
    <div class="acess">
        <button tabindex="0" alt='Aumentar fonte do site' title='Aumentar fonte do site' type="button" id="btnAumentar"><img alt='Aumentar fonte do site' title='Aumentar fonte do site' src="<?= IMG_PATH.'main/' ?>a+.png"></button>
        <button tabindex="0" alt='Reduzir fonte do site' title='Reduzir fonte do site' type="button" id="btnDiminuir"><img alt='Reduzir fonte do site' title='Reduzir fonte do site' src="<?= IMG_PATH.'main/' ?>a-.png"></button>
    </div>
        </div>
        
        <div class="col-md-4 text-center">
            <a title="Ir á página incial" href="<?= BASE_URL ?>">
            <img role="figure" alt='Logotipo do MuseMEP' title='Logotipo do MuseMEP' class="logo" src="<?= LOGO ?>">
</a>
        </div>
        
        <div class="col-md-4">

        <?php /* 
            <div class="search-container">

                <form action="/action_page.php">


                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Pesquisar" aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                </form>
            </div> */ ?>
        </div>
    </div>
</div>
</div>
    <div id="header">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a title="Ir á página incial" class="nav-link" href="<?= BASE_URL ?>">Início <span class="sr-only">(Página atual)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a  title="Exibir sessão MuseMEP"  class="nav-link dropdown-toggle" href="#" id="aboutMusemep" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MuseMEP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutMusemepP">
                                <a title="Ir á página sobre o MuseMEP"  class="dropdown-item" href="<?= BASE_URL.'Sobre' ?>">O que é o MuseMEP</a>
                                <a title="Ir á página sobre a missão do MuseMEP" class="dropdown-item" href="<?= BASE_URL.'Sobre/Missao' ?>">Missão</a>
                                <a title="Ir á página sobre a história do MuseMEP" class="dropdown-item" href="<?= BASE_URL.'Sobre/Historia' ?>">História</a>
                                <a title="Ir á página do Código de Conduta" class="dropdown-item" href="<?= BASE_URL.'Sobre/codigo_de_conduta' ?>">Código de Conduta</a>
                                <a title="Ir á página dos links relacionados" class="dropdown-item" href="<?= BASE_URL.'Sobre/Links_Relacionados' ?>">Links Relacionados</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a title="Exibir sessão MEP's"  class="nav-link dropdown-toggle" href="#" id="aboutmeps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MEP's
                            </a>
                            <div class="dropdown-menu" aria-labelledby="aboutmeps">
                                <a title="Ir á página do que são MEP's" class="dropdown-item" href="<?= BASE_URL.'MEPS' ?>">O que são MEP's</a>
                                <a title="Ir á página da Trajetória" class="dropdown-item" href="<?= BASE_URL.'MEPS/Trajetoria' ?>">Trajetória</a>
                                <a title="Ir á página de MEP em números" class="dropdown-item" href="<?= BASE_URL.'MEPS/MEPNumeros' ?>">MEP em números</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Ir á página Organização do Acervo" href="<?= BASE_URL.'Entenda' ?>">Organização do Acervo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Ir á página Participe"  href="<?= BASE_URL.'Participe' ?>">Participe!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Ir á página do acervo"  href="<?= BASE_URL.'Acervo' ?>">Acervo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Ir á página do nosso contato" href="<?= BASE_URL.'Contato' ?>">Fale Conosco</a>
                        </li>
                       

                    </ul>
                </div>
            </nav>
        </header>
    </div>
   