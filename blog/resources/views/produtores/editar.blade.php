@include ('header')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro de produtores</title>
</head>
<body>
  <img src="{{asset('cafezinho.jpg')}}" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-center">Editar cadastro de produtor</h2>
        <hr>
        <form action="/produtores/editar/{{$produtor->id}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="corpName">Razão Social</label>
            <input type="text" class="form-control" name="corpName" value="{{$produtor->corpName}}">
          </div>
          <div class="form-group">
            <label for="brandName">Nome Fantasia</label>
            <input type="text" class="form-control" name="brandName" value="{{$produtor->brandName}}">
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ ou CPF</label>
            <input type="text" class="form-control" name="cnpj" value="{{$produtor->cnpj}}">
          </div>
          <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" value="{{$produtor->cep}}">
          </div>
          <div class="form-group">
            <label for="street">Endereço</label>
            <input type="text" class="form-control" name="street" value="{{$produtor->street}}">
          </div>
          <div class="form-group">
            <label for="number">Número</label>
            <input type="text" class="form-control" name="number" value="{{$produtor->number}}">
          </div>
          <div class="form-group">
            <label for="adressComp">Complemento</label>
            <input type="text" class="form-control" name="adressComp" value="{{$produtor->adressComp}}">
          </div>
          <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" name="city" value="{{$produtor->city}}">
          </div>
          <div class="form-group">
            <label for="state">Estado</label>
            <input type="text" class="form-control" name="state" value="{{$produtor->state}}">
          </div>
          <div class="form-group">
            <label for="phoneCode1">DDD</label>
            <input type="number" class="form-control" name="phoneCode1" value="{{$produtor->phoneCode1}}">
          </div>
          <div class="form-group">
            <label for="phone">Telefone/Celular</label>
            <input type="number" class="form-control" name="phone" value="{{$produtor->phone}}">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com" value="{{$produtor->email}}">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" value="{{$produtor->password}}">
          </div>
          <div class="form-group">
            <label for="senhatrue">Confirmação de senha</label>
            <input type="password" class="form-control" name="senhatrue">
          </div>
          <div class="form-group">
            <label for="description">Sua história</label>
            <textarea class="form-control" name="description" rows="8">{{$produtor->description}}</textarea>
          </div>
          <div class="form-group">
              <label for="photo">Imagem</label>
              <input type="file" class="form-control-file" name="photo">
              <img src="{{asset($produtor->photo)}}" alt="">
          </div>
            <button type="submit" class="btn btn-lg btn-block" name="button">Atualizar</button>
        </form>
      </div>
    </div>
  </div>
</body>
@include ('footer')
</html>
