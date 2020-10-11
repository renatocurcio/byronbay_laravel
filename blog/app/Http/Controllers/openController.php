<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\seller;

class openController extends Controller
{
    public function visualizarProdutos(){
      $produtos = product::paginate(9);
      return view ('produtos',['produtos'=>$produtos]);
    }

    public function verProduto($id){
      $produto = product::find($id);
      return view ('produto', ['produto'=>$produto]);
    }

    public function visualizarProdutores(){
      $produtores = seller::paginate(9);
      return view ('produtores',['produtores'=>$produtores]);
    }

    public function verProdutor($id){
      $produtor = seller::find($id);
      return view ('produtor', ['produtor'=>$produtor]);
    }

    public function home(){
      $produtos = product::all()->random(4);
      $produtores = seller::all()->random(3);
       return view ('home', ['produtos'=>$produtos], ['produtores'=>$produtores]);
    }
}
