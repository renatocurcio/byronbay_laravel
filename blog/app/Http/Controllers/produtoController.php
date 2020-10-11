<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class produtoController extends Controller
{
  
    public function cadastrar (Request $request){
      if ($request->isMethod('GET')){
        return view ('produtos.cadastro');
      }

      $mensagem = [
        "required" => "O campo :attribute é obrigatório"
      ];

      $validateData = $request->validate([
        'productName' => 'required|max:100',
        'description' => 'required|max:500',
        'weight' => 'required',
        'grain' => 'required',
        'price' => 'required',
        'photo' => 'required',
      ], $mensagem);

      $timestamp = date_format(date_create(), 'YmdHism');
      $nomeImg = $request -> file('photo')->getClientOriginalName();
      $save = $request -> file('photo')->storeAs("public/img", $timestamp.$nomeImg);
      $url='storage/img/'.$timestamp.$nomeImg;

      $produto = new product();
      $produto -> productName = $request -> productName;
      $produto -> description = $request -> description;
      $produto -> weight = $request -> weight;
      $produto -> grain = $request -> grain;
      $produto -> price = $request -> price;
      $produto -> photo = $url;
      // $produto -> sellerId = Auth::id();

      $resultado = $produto -> save();

      return view('produtores.meus_produtos', ['produtos'=>$produto]);

      // return view ("meus_produtos", ['resultado'=>$resultado]);
    }
    

    public function listarProdutos(){
      $produtos = product::paginate(10);
      $produtor = seller::$id;
      return view ('produtores.meus_produtos', ['produtos'=>$produtos, 'produtor'=>$produtor]);
    }

    public function editar(Request $request, product $produto){
      return view ('produtos.editar', ['produto'=>$produto]);
    }

    public function atualizar(Request $request, product $produto){
      $validateData = $request->validate([
        'productName' => 'required|max:100',
        'description' => 'required|max:500',
        'weight' => 'required',
        'grain' => 'required',
        'price' => 'required',
      ]);

      if (isset($request['photo'])) {
        $timestamp = date_format(date_create(), 'YmdHism');
        $nomeImg = $request -> file('photo')->getClientOriginalName();
        $save = $request -> file('photo')->storeAs("public/img", $timestamp.$nomeImg);
        $url='storage/img/'.$timestamp.$nomeImg;

        $produto -> productName = $request -> productName;
        $produto -> description = $request -> description;
        $produto -> weight = $request -> weight;
        $produto -> grain = $request -> grain;
        $produto -> price = $request -> price;
        $produto -> photo = $url;
        }

         else {
        $produto -> productName = $request -> productName;
        $produto -> description = $request -> description;
        $produto -> weight = $request -> weight;
        $produto -> grain = $request -> grain;
        $produto -> price = $request -> price;
      }

      $resultado = $produto -> save();

      return redirect()->action('produtoController@listarProdutos');
    }

    public function deletar(Request $request, product $produto){
      $produto->delete();
      return redirect('produtores/meus_produtos');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    }
