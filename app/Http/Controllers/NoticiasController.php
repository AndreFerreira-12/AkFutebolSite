<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;

class NoticiasController extends Controller
{
    public function abrirCadastro()
    {
        return view('cadastro_noticias');
    }

    public function cadastrarNoticia(Request $request)
    {
        $not = new Noticias();
        $not->titulo =$request->titulo;
        $not->texto = $request->texto;
        $not->tipo = $request->tipo;
        $not->data = $request->data;
        $not->url = $request->url; //por padrao vem a url do campo URL

         //upload arquivo
         if($request->file('urlImage')) //só acessa se tiver uma imagem no campo urlImage
         {
             $imageName = md5(microtime()).'.'.$request->urlImage->extension();
             $request->urlImage->move(public_path('imagesadm'), $imageName);
             $not->url = $imageName; //substuir a url por urlImage
         }



        $not->tipo = $request->tipo;
        $not->save();
        return view('cadastro_noticias')->with(['msg' => 'Notícia cadastrada com sucesso!']);
    }

    public function consultarNoticia()
    {
        $dadosNoticias = Noticias::all();
        return view('consulta_noticia',['dadosNoticias' => $dadosNoticias]);
    }

    public function index()
    {
        $dadosNotVideos = Noticias::where('tipo','videos')->get();
        $dadosNotCards = Noticias::where('tipo','cards')->get();
        $dadosNotAlbum = Noticias::where('tipo','album')->get();
        $dadosNotBloco = Noticias::Where('tipo','bloco')->get();
        $faixa1 = "noticias";
        $faixa2 = "vídeos";
        $faixa3 = "cards";
        
        return view('index',['dadosNotVideos' => $dadosNotVideos, 'dadosNotAlbum' => $dadosNotAlbum, 'dadosNotCards' => $dadosNotCards,'dadosNotBloco'=>$dadosNotBloco, 'faixa2' => $faixa2, 'faixa1' => $faixa1, 'faixa3' => $faixa3]);
    }
    

    public function excluirNoticia($id)
    {
        $u = Noticias::findOrFail($id);
        $u->delete();
        return back();
    }
    public function editarNoticia($id)
    {
            $u = Noticias::findOrFail($id);
            return view('editar-noticias', ['u' => $u]);
       
    }
    public function atualizarNoticia(Request $request)
    {
        $u = Noticias::findOrFail($request->id);
        $u->titulo =$request->titulo;
        $u->texto = $request->texto;
        $u->tipo = $request->tipo;
        $u->data = $request->data;
        $u->url = $request->url; //por padrao vem a url do campo URL
        $u->tipo = $request->tipo;
        $u->update();
        return view('cadastro_noticias');
    }
}
