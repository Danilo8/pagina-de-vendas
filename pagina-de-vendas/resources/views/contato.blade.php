<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Contato">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Contato</title>

        <!--Icon-->
        <link rel="shortcut icon" href="{{asset('img/icon/book.ico')}}" type="image/x-icon">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Sura" rel="stylesheet">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--cdn Bootstrap JS and JQUERY files-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body style="font-family: 'Sura', serif;">
        <!--Barra de Navegação-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('img/logo/logo-clara.png')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <span style="cursor: pointer" class="nav-link">
                            Sobre
                        </span>
                        <div class="dropdown-content text-center">
                            <a class="dropdown-item" href="{{url('/sobre')}}">Quem somos?</a>
                            <a class="dropdown-item" href="{{url('/termos')}}">Termos de Uso</a>
                            <a class="dropdown-item" href="{{url('/privacidade')}}">Privacidade</a>
                        </div>                                             
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/contato')}}">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entrar/Cadastrar</a>
                    </li>                    
                </ul>
            </div>
        </nav>
    
        <!--JS files-->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>