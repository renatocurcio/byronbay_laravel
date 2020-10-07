<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class produtoController extends Controller
{
    public function cadastrarProduto (Request $request){
      if ($request->isMethod('GET')){
        return view ('cadastro_produtos');
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

      $nomeImg = $request -> file('photo')->getClientOriginalName();
      $save = $request -> file('photo')->storeAs("public/img", $nomeImg);

      $novoProduto = new product();
      $novoProduto -> productName = $request -> productName;
      $novoProduto -> description = $request -> description;
      $novoProduto -> weight = $request -> weight;
      $novoProduto -> grain = $request -> grain;
      $novoProduto -> price = $request -> price;
      $novoProduto -> photo = $request -> photo;
      // $novoProduto -> sellerId = $request -> sellerId;

      $resultado = $novoProduto -> save();

      return view ("meus_produtos", ['resultado'=>$resultado]);
    }
}
