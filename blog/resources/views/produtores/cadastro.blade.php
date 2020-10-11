@include('header')
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
        <h2 class="text-center">Cadastro de produtor</h2>
        <hr>
        <form action="../produtores/cadastro" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="corpName">Razão Social</label>
            <input type="text" class="form-control" name="corpName">
          </div>
          <div class="form-group">
            <label for="brandName">Nome Fantasia</label>
            <input type="text" class="form-control" name="brandName">
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ ou CPF</label>
            <input type="text" class="form-control" name="cnpj">
          </div>
          <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep">
          </div>
          <div class="form-group">
            <label for="street">Endereço</label>
            <input type="text" class="form-control" name="street">
          </div>
          <div class="form-group">
            <label for="number">Número</label>
            <input type="text" class="form-control" name="number">
          </div>
          <div class="form-group">
            <label for="adressComp">Complemento</label>
            <input type="text" class="form-control" name="adressComp">
          </div>
          <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" name="city">
          </div>
          <div class="form-group">
            <label for="state">Estado</label>
            <input type="text" class="form-control" name="state">
          </div>
          <div class="form-group">
            <label for="phoneCode1">DDD</label>
            <input type="number" class="form-control" name="phoneCode1">
          </div>
          <div class="form-group">
            <label for="phone">Telefone/Celular</label>
            <input type="number" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <label for="senhatrue">Confirmação de senha</label>
            <input type="password" class="form-control" name="senhatrue">
          </div>
          <div class="form-group">
            <label for="description">Sua história</label>
            <textarea class="form-control" name="description" rows="8"></textarea>
          </div>
          <div class="form-group">
              <label for="photo">Imagem</label>
              <input type="file" class="form-control-file" name="photo">
          </div>
            <button type="submit" class="btn btn-lg btn-block" name="button">Cadastrar</button>
            </form>
          </div>
      </div>
    </div>

    <!-- MENSAGEM DE ERRO DAS VALIDAÇÕES -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

  </body>
@include('footer')

</html>
