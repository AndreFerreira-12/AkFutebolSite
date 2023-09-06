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
                                                    <!-- START DIV QUE ENGLOBA O SITE -->
    <div class="site">
        <!-- START HEADER -->
    <header class="cont-header">
        
        <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-akfutebol"></a>
        <!-- START MENU -->
        <nav>
            <ul>
                <li><a href="#noticias" class="btn btn-branco">Notícias</a></li>
                <li><a href="#sobre-contato" class="btn btn-branco">Contato</a></li>
                <li><a href="#sobre-contato" class="btn btn-branco">Sobre</a></li>
                <li><a href="{{route('login')}}" class="btn btn-branco">Login</a></li>
            </ul>
        </nav>
        <!-- END MENU -->
    </header>
        <!-- END HEADER -->

     <!-- START FAIXA -->
     <div class="faixa">
        <span>o melhor site de futebol!</span>
    </div>
    <!-- END FAIXA -->

        <!-- START BANNER -->
        <aside>
        <div class="banner">
        <div class="banner-img">
             <a href=""><img class="selected" id="banner-noticia1" src="./assets/images/banner-noticia1.jpg" alt="imagem-do-banner1"></a>
             <a href=""><img  id="banner-noticia2" src="{{asset('assets/images/banner-noticia2.jpg')}}" alt="imagem-do-banner2"></a>
             <a href=""><img id="banner-noticia3" src="{{asset('assets/images/banner-noticia3.jpg')}}" alt="imagem-do-banner3"></a>
             <a href=""><img id="banner-noticia4" src="{{asset('assets/images/banner-noticia4.jpg')}}" alt="imagem-do-banner4"></a>
             <a href=""><img id="banner-noticia5" src="{{asset('assets/images/banner-noticia5.jpeg')}}" alt="imagem-do-banner5"></a>

         </div>
        </div>
        </aside>
        <!-- END BANNER -->

        <!-- START REDES SOCIAIS LATERAL -->
            <div class="redes-sociais-lateral">
                <ul>
                    <li><a href="#"><img src="{{asset('assets/images/facebook-logo.png')}}" alt="facebook-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/instagram-logo.png')}}" alt="instagram-akfutebol"></a></li>
                    <li><a href="https://wa.me/5511962053586"><img src="{{asset('assets/images/whatsapp-logo.png')}}" alt="whatsapp-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/twitter-logo.png')}}" alt="twitter-akfutebol"></a></li>
                </ul>
            </div>
        <!-- END REDES SOCIAIS LATERAL -->



        <!-- START MAIN -->
        <main class="cont-main">

            <!-- START BARRA NOTICIAS INICIO-->
            <section>
            <h1 class="faixa-branca" id="noticias">{{$faixa1}}</h1>
             <!-- START GRID E LISTA COM BLOCOS -->
            <div class="conjunto-main">
                <!-- START GRID ALBUM -->
                <div class="container">
                @foreach($dadosNotAlbum as $value)
                    <div class="item"><a href="#" id="album-noticia1"><img src="{{ url('imagesadm/'.$value->url) }}" title="{{$value->titulo}}" alt="album-noticia1"></a></div>
                @endforeach
                </div>
                <!-- END GRID ALBUM -->

                <!-- START BARRA DE NOTICIAS -->
               
                <div class="container-noticias">
                    <h1 class="h1-blocos">últimas notícias</h1>
                    <div class="conjunto-noticias">
                    @foreach ($dadosNotBloco as $value)
                    <a href="#" target="_blank"><div class="noticias-blocos bloco1">
                    <span class="n-cj-n">{{$value->titulo}}</span> 
                    <p class="t-cj-n ">{{$value->texto}}</p>
                    <!-- START TEXTO DATA -->
                    <span class="text-data t-cj-n">Publicado em <span class="d-n">{{$value->data}}</span></span>
                   <!-- END TEXTO DATA -->
                    </div></a>
                     @endforeach 
                    </div>
                </div>
            
                <!-- END BARRA DE NOTICIAS -->
            </div>
            </section>
            <!-- END GRID E LISTA COM BLOCOS -->


            <!-- START BARRA NOTICIAS-VIDEOS -->
            <h1 class="faixa-branca">{{$faixa2}}</h1>
            <!-- END BARRA NOTICIAS-VIDEOS -->
            <section class="conjunto-noticias-v-t">
           
            <!-- START NOTICIAS COM VIDEO -->
            @foreach($dadosNotVideos as $value)
            <div class="noticias-v-t">
                <div class="video-n">
                    <iframe class="video1" src="{{$value->url}}" frameborder="0" tittle="video-haaland" allowfullscreen width="98.6%" height="390px"></iframe>
                </div>
                <div class="text-n">
                    <h1>{{strtoupper($value->titulo)}}</h1>
                    <p>{{$value->texto}}</p>
                   <!-- START TEXTO DATA -->
                    <span class="text-data">Publicado em <span class="d-n">{{$value->data}}</span>
                   <!-- END TEXTO DATA -->
                </div>
            </div>
            @endforeach            
            </section>
             <!-- END NOTICIAS COM VIDEO -->

             <!-- START CARD DE NOTICIAS -->
             <h1 class="faixa-branca">{{$faixa3}}</h1>
             <section class="cards-da-main">
                
                
                <!-- start card -->
                @foreach($dadosNotCards as $value)
                <div class="card-main">
                
                <div class="img-card">
                    <a href="#"><img src="{{ url('imagesadm/'.$value->url) }}" alt="card-de-notícia" title="{{$value->titulo}}"></a>
                </div>
                <section class="txt-card">                      
                <article>
                <h1>{{$value->titulo}}</h1>
                <p>{{$value->texto}}  </p> 
                <!-- START TEXTO DATA -->
                <span class="text-data">Publicado em <span class="d-n">{{$value->data}}</span>
                <!-- END TEXTO DATA -->                           
                </article>
                </section>
            </div>
            @endforeach
            <!-- end card -->
            
            <!-- END CARD DE NOTICIAS -->
        </main>      
        <!-- END MAIN -->

        <!-- START RODAPE  -->
        <footer id="sobre-contato">
        <!-- LOGO RODAPE -->
        <div class="footer-logo">
            <a href="{{route('inicio')}}"><img src="{{asset('assets/images/logotipo-akfutebol.png')}}" alt="logo-do-rodape"></a>
        </div>
        <!-- END LOGO RODAPE -->
            <div class="boxs redes-sociais-footer">
                <h1>Redes-Sociais</h1>
                <ul>
                    <li><a href="#"><img src="{{asset('assets/images/instagram-logo.png')}}" alt="instagram-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/facebook-logo.png')}}" alt="facebook-akfutebol"></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/twitter-logo.png')}}" alt="twitter-akfutebol"></a></li>
                    <li><a href="https://wa.me/5511962053586"><img src="{{asset('assets/images/whatsapp-logo.png')}}" alt="whatsapp-akfutebol"></a></li>
                </ul>
            </div>
            <div class="boxs ">
                <h1>CONTATO</h1>
                <ul >
                    <li><a href="">(11)962053586</a></li>
                    <li><a href="#">akfutebol@gmail.com</a></li>
                    <li><a href="https://wa.me/5511962053586">Central de Atendimento</a></li>
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
        <div class="p-footer">
            <div class="cv-footer">
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
         <!-- END POS FOOTER -->
    </div>

                                                    <!-- END DIV QUE ENGLOBA O SITE -->
        <script src="{{asset('assets/javascript/slider.js')}}"></script>

</body>
</html>