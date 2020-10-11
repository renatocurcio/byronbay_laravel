@include ('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Meus dados</title>
</head>
<body>
  <img src="{{asset('cafezinho.jpg')}}" alt="padrao" width="100%" height="110w">
  <div class="container">
    <h3 class="text-center">Meus dados</h3>
    <hr>
    <div class="row justify-content-center">
      <div class="col-5">
        <img src="{{asset($produtor->photo)}}" alt="produtor" width="100%" height="300w">
        <br>
        <h3>{{$produtor->brandName}}</h3>
        <h5>{{$produtor->city}}/{{$produtor->state}}</h5>
        <br>
        <p class="text-justify">{{$produtor->description}}</p>

      </div>
      <div class="col-5">
        <a href="../editar/{{$produtor->id}}" style="color:black"><h4>Editar dados</h4></a>
        <br>
        <a href="../meus_produtos/{{$produtor->id}}" style="color:black"><h4>Meus produtos</h4></a>
        <br>
        <a href="../produtos/cadastro/{{$produtor->id}}" style="color:black"><h4>Cadastrar produto</h4></a>
      </div>
    </div>


  </div>

</body>
@include ('footer')
</html>
