<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/imports.css')}}">
    <title>Consulta Notícias | AKFutebol</title>
</head>
<body>
            <!-- START HEADER -->
    <header class="cont-header login-cadastro-adm">   
    <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>
    </header>
        <!-- END HEADER -->
    <main class="cont-main">
    <div class="container-consulta">
    <h1 class="c-adm-h1">Consulta Notícias</h1>
    <div class="container-tabela-consulta">
    <table class="tabela-cons">
        <thead class="sup-table">
            <th>Título</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Edição</th>
            <th>Exclusão</th>
        </thead>
        <tbody>
            @foreach($dadosNoticias as $value)
            <tr class="inf-table">
                <td class="table-c">{{$value->titulo}}</td>
                <td class="table-c">{{$value->data}}</td>
                <td class="table-c">{{$value->tipo}}</td>
                <td class="btn-table-edit table-c"><a href="{{route('editar-noticia',$value->id)}}" onclick="return confirm('Deseja realmente editar esta notícia?')" class="text-cons">Editar</a></td> 
                <td class="btn-table-delete table-c"><a href="{{route('excluir-noticia',$value->id)}}" onclick="return confirm('Deseja realmente excluir esta notícia?')" class="text-cons"> Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
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
                <span>Copyright ©  2023. AKFutebol - Todos direitos reservados</span>
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