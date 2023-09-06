<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/imports.css')}}" type="text/css">
    <title>AKFutebol | HOME</title>
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
            <div class="container-formulario">
                
                <!-- START FORMULARIO -->
                <div class="formulario-login">
                    <form action="{{ route('novo-usuario') }}" method="post">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ isset($u) ? $u->id : null }}">
                       
                        
                    <img src="{{asset('assets/images/user-login.png')}}" alt="icone-user" id="user-icone-cadastro">
                    <img src="{{asset('assets/images/email-login.png')}}" alt="icone-email" id="email-icone-cadastro">
                    <img src="{{asset('assets/images/lock-login.png')}}" alt="icone-lock" id="lock-icone-cadastro">
                    <label for="nome">NOME:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{isset($u) ? $u->name : null}}">
                    <label for="nome">EMAIL:</label>
                    <input type="email"  name="email" id="email" class="form-control" required value="{{isset($u) ? $u->email : null}}">
                    <label for="nome">SENHA:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    <span>Já tem cadastro? Faça <a href="{{route('login')}}">LOGIN</a></span>
                    <<button type="submit" class="bt-cl c">Cadastrar-se</a></button>
                </form>
                </div>
                @if(session('msg'))
              <div>
                {{ session('msg') }}
              </div>
            @endif
                <!-- END FORMULARIO -->

            </div>
            <!-- START CONTAINER LOGIN -->

        </div>

        <!--END TELA LOGIN -->
</body>
</html>