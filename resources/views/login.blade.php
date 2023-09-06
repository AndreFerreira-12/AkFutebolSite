<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/imports.css')}}" type="text/css">
    <title>AKFutebol | LOGIN</title>
</head>
<body>
    <!-- START TELA LOGIN -->
    <div class="tela-login">
        <!-- START HEADER -->
    <header class="cont-header login-cadastro-adm">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>

    </header>
        <!-- END HEADER -->

                <!-- START CONTAINER LOGIN -->
                
    <form action="{{route('logar')}}" method="post">
    @csrf

<div class="container-formulario">
<!-- START FORMULARIO -->
<div class="formulario-login">

    <label for="email">NOME:</label>
    <input type="email" name="email" id="login" placeholder="INSIRA SEU NOME">
    <label for="password">SENHA:</label>
    <input type="password" name="password" id="senha" placeholder="INSIRA SUA SENHA">
    <button class="btn-lc" type="submit">Entrar</button>
</div>
<!-- END FORMULARIO -->

</div>
</form>
<!-- START CONTAINER LOGIN -->

        </div>

        <!--END TELA LOGIN -->
</body>
</html>
