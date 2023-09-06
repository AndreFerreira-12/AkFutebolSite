<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/imports.css')}}" type="text/css">
    <title>Página de Administração | AKFutebol</title>
</head>
<body>
        <!-- START HEADER -->
        <header class="cont-header login-cadastro-adm">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>

    </header>
        <!-- END HEADER -->
        
 
    <main class="cont-main">
    <h1 class="faixa-branca">Bem vindo a página do administrador!</h1>
    <div class="adm">
    <section class="container-adm">
    <h1 class="h1-adm">Página do Administrador</h1>
    <a href="{{route('cadastro-noticia')}}" class="a-adm adm-text btn-adm btn-branco">Cadastrar Notícias</a>
    <a href="{{route('consultar-noticia')}}" class="a-adm adm-text btn-adm btn-branco">Consultar Notícias</a>
    </section>
    </div>
    </main>
    <footer id="sobre-contato" class="footer-pagina-adm">
        <!-- LOGO RODAPE -->
        <div class="footer-logo">
            <a href="./index.html"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-do-rodape"></a>
        </div>
        <!-- END LOGO RODAPE -->
            <div class="boxs redes-sociais-footer">
                <h1>Redes-Sociais</h1>
                <ul>
                    <li><a href="#"><img src="{{asset('assets/images/instagram-logo.png')}}" alt="instagram-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/facebook-logo.png')}}" alt="facebook-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/twitter-logo.png')}}" alt="twitter-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/whatsapp-logo.png')}}" alt="whatsapp-akfutebol"></a></li>
                </ul>
            </div>
            <div class="boxs ">
                <h1>CONTATO</h1>
                <ul >
                    <li><a href="#">(11)4003-9588</a></li>
                    <li><a href="#">akfutebol@gmail.com</a></li>
                    <li><a href="#">Central de Atendimento</a></li>
                </ul>
            </div>
            <div class="boxs align-j">
                <h1>SOBRE akfutebol</h1>
                <ul>
                    <li><p>O site AKFutebol é um projeto de TCC do curso de Desenvolvimento de Sistemas, com o intuito de passar notícias sobre futebol.</p></li>
                </ul>
            </div>

        <!-- RODAPE -->
        </footer>
         <!-- END FOOTER -->

         <!-- START POS FOOTER -->
        <div class="p-footer footer-pagina-adm" >
            <div class="cv-footer cv-footer-pagina-adm">
                <span>Copyright © 2023. AKFutebol - Todos direitos reservados</span>
                <ul>
                    <li><a href="{{route('inicio')}}">AKFutebol</a></li>
                    <li><a href="#noticias">Notícias</a></li>
                    <li><a href="#sobre-contato">Contato</a></li>
                    <li><a href="#sobre-contato">Sobre</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
        </div>
</body>
</html>