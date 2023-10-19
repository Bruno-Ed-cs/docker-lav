
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base target="_self">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagens/ifrn_exatas_logo_smol.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/css/global_stuff.css'])

    <title>IFRN Exatas</title>
    <meta name="title" content="IFRN Exatas" />
    <meta name="description" content="Pra ficar afiado no IF!" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#22DD22">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#009900">
    <meta name="author" content="João Gabriel, Bruno Eduardo, Clara Emanuella e Sávio Granjeiro">

    <!-- Facebook/Discord/others -->
    <meta property="og:title" content="IFRN Exatas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="#" /> <!-- Usar link embed -->
    <meta property="og:description" content="Pra ficar afiado no IF!" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:url" content="#">
    <meta property="twitter:title" content="IFRN Exatas">
    <meta property="twitter:description" content="Pra ficar afiado no IF!">
    <meta property="twitter:image" content="#"> <!-- Usar link embed -->

</head>

<style>

</style>

<body class="bg-full-dark">
    <header class="navbar navbar-dark navbar-expand-md nav-pills nav-fill" style="height:9.8vh">
        <nav class="fixed-top navbar navbar-dark navbar-expand-md nav-pills nav-fill shadow-sm" style="height: 9.8vh;">
            <a class="navbar-brand text-danger" href="home.html">
                <img src="{{asset('/imagens/IFRN_EXATAS_LOGO.png')}}" class="logo-principal" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link botao-ativo" href="home.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link botao-inativo" href="#">Criar Teste</a>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="nav-link botao-inativo dropdown-toggle" type="button" id="dropdownNavLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Questões</span>
                            </div>
                              <div class="dropdown-menu" style="background-color: rgba(12, 12, 12, 0.75)" aria-labelledby="dropdownNavLinks">
                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="{{ asset('/imagens/matematicas.png') }}" alt=" " class="dropdown-item-icon">
                                        <span>Aritmética Básica</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/#" alt=" " class="dropdown-item-icon">
                                        <span class="">Expressões Algébricas</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/equações.png" alt=" " class="dropdown-item-icon">
                                        <span class="">Equações</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/#" alt=" " class="dropdown-item-icon">
                                        <span class="">Funções de Primeiro Grau</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/porcentagem.png" alt=" " class="dropdown-item-icon">
                                        <span class="">Porcentagem</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/escala cartografica.png" alt=" " class="dropdown-item-icon">
                                        <span class="">Escala Cartográfica</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/financeira.png" alt=" " class="dropdown-item-icon">
                                        <span class="">Matemática Financeira</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/#" alt=" " class="dropdown-item-icon">
                                        <span class="">Geometria Plana</span>
                                        <br style="clear:both">
                                    </div>
                                </a>

                                <a target="_blank" href="#">
                                    <div class="dropdown-item d-flex align-middle align-content-center">
                                        <img src="recursos/imagens/#" alt=" " class="dropdown-item-icon">
                                        <span class="">Notação Científica</span>
                                        <br style="clear:both">
                                    </div>
                                </a>
                              </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link botao-inativo" href="sobre">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div>
        <p>a ser adicionado</p>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
