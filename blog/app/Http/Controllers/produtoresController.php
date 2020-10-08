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
      'celPhone' => 'max:500',
      'email' => 'required|max:80',
      'password' => 'required|max:30',
      'photo' => 'required',
    ], $mensagem);

    $nomeImg = $request -> file('photo')->getClientOriginalName();
    $save = $request -> file('photo')->storeAs("storage/img", $nomeImg);

    $produtor = new seller();
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
    // $produtor -> celPhone = $validateData['celPhone'];
    $produtor -> email = $validateData['email'];
    $produtor -> password = $validateData['password'];
    $produtor -> photo = $save;

    $produtor -> save();
    $user = $produtor['brandName'];

    return view('cad_ok', ['user'=>$user]);
  }
}
