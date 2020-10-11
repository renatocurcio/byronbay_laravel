<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;

class produtoresController extends Controller
{
  public function cadastrar(Request $request){
    if ($request->isMethod('GET')){
      return view ('produtores.cadastro');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    $mensagem = [
      "required" => "O campo :attribute é obrigatório"
    ];

    $validateData = $request->validate([
      'corpName' => 'required|max:250',
      'brandName' => 'required|max:200',
      'cnpj' => 'required|max:14',
      'cep' => 'required|max:8',
      'street' => 'required|max:200',
      'number' => 'required|max:10',
      'adressComp' => 'required|max:50',
      'city' => 'required|max:100',
      'state' => 'required|max:2',
      'phoneCode1' => 'required|max:2',
      'phone' => 'required|max:9',
      'description' => 'max:500',
      'email' => 'required|max:80',
      'password' => 'required|max:30',
      'photo' => 'required',
    ], $mensagem);

    $timestamp = date_format(date_create(), 'YmdHism');
    $nomeImg = $request -> file('photo')->getClientOriginalName();
    $save = $request -> file('photo')->storeAs("public/img", $timestamp.$nomeImg);
    $url='storage/img/'.$timestamp.$nomeImg;

    $user = new seller();
    $user -> corpName = $validateData['corpName'];
    $user -> brandName = $validateData['brandName'];
    $user -> cnpj = $validateData['cnpj'];
    $user -> cep = $validateData['cep'];
    $user -> street = $validateData['street'];
    $user -> number = $validateData['number'];
    $user -> adressComp = $validateData['adressComp'];
    $user -> city = $validateData['city'];
    $user -> state = $validateData['state'];
    $user -> phoneCode1 = $validateData['phoneCode1'];
    $user -> phone = $validateData['phone'];
    $user -> description = $validateData['description'];
    $user -> email = $validateData['email'];
    $user -> password = $validateData['password'];
    $user -> photo = $url;

    $resultado = $user -> save();

    return view('cad_ok', ['user'=>$user]);
  }

  public function visualizar(Request $request, seller $produtor) {
    return view ('produtores.dados', ['produtor'=>$produtor]);
  }

  public function editar(Request $request, seller $produtor){
    return view ('produtores.editar', ['produtor'=>$produtor]);
  }

  public function atualizar(Request $request, seller $produtor){
    $validateData = $request->validate([
      'corpName' => 'required|max:250',
      'brandName' => 'required|max:200',
      'cnpj' => 'required|max:14',
      'cep' => 'required|max:8',
      'street' => 'required|max:200',
      'number' => 'required|max:10',
      'adressComp' => 'required|max:50',
      'city' => 'required|max:100',
      'state' => 'required|max:2',
      'phoneCode1' => 'required|max:2',
      'phone' => 'required|max:9',
      'description' => 'max:500',
      'email' => 'required|max:80',
      'password' => 'required|max:30',
    ]);

    if (isset($request['photo'])) {
      $timestamp = date_format(date_create(), 'YmdHism');
      $nomeImg = $request -> file('photo')->getClientOriginalName();
      $save = $request -> file('photo')->storeAs("public/img", $timestamp.$nomeImg);
      $url='storage/img/'.$timestamp.$nomeImg;

      $produtor -> corpName = $validateData['corpName'];
      $produtor -> brandName = $validateData['brandName'];
      $produtor -> cnpj = $validateData['cnpj'];
      $produtor -> cep = $validateData['cep'];
      $produtor -> street = $validateData['street'];
      $produtor -> number = $validateData['number'];
      $produtor -> adressComp = $validateData['adressComp'];
      $produtor -> city = $validateData['city'];
      $produtor -> state = $validateData['state'];
      $produtor -> phoneCode1 = $validateData['phoneCode1'];
      $produtor -> phone = $validateData['phone'];
      $produtor -> description = $validateData['description'];
      $produtor -> email = $validateData['email'];
      $produtor -> password = $validateData['password'];
      $produtor -> photo = $url;
      }

       else {
         $produtor -> corpName = $validateData['corpName'];
         $produtor -> brandName = $validateData['brandName'];
         $produtor -> cnpj = $validateData['cnpj'];
         $produtor -> cep = $validateData['cep'];
         $produtor -> street = $validateData['street'];
         $produtor -> number = $validateData['number'];
         $produtor -> adressComp = $validateData['adressComp'];
         $produtor -> city = $validateData['city'];
         $produtor -> state = $validateData['state'];
         $produtor -> phoneCode1 = $validateData['phoneCode1'];
         $produtor -> phone = $validateData['phone'];
         $produtor -> description = $validateData['description'];
         $produtor -> email = $validateData['email'];
         $produtor -> password = $validateData['password'];
      }

    $resultado = $produtor -> save();

    return redirect('produtores/dados/'.$produtor->id);
  }
}
