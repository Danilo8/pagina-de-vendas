<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Administrador">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Administrador</title>

        <!--Icon-->
        <link rel="shortcut icon" href="{{asset('img/icon/book.ico')}}" type="image/x-icon">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Sura" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--cdn Bootstrap JS and JQUERY files-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body style="font-family: 'Sura', serif;background-color: #ccc">
        <!--Barra de Navegação-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('img/logo/logo-clara.png')}}" alt="Logo">
            </a>
            <div style="margin-left: 15%" class="text-center">
                <h1 class="text-white">Administrador</h1>
            </div>
        </nav>

        <main style="font-family: 'Arimo', serif;" class="mt-5" role="main">
            <div class="container">
                <div style="margin-left: 20%;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);" class="card col-8">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-5">Acessar Painel Administrativo</h2>
                        <form action="" method="post" class="mx-5 px-5">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-lg btn-block btn-dark">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <!--JS files-->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>