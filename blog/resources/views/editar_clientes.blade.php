@include('header')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro de cliente</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-center">Editar cadastro de cliente</h2>
        <hr>
        <form action="dados_cliente" method="post">
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome">
          </div>
          <!-- VERIFICAR DOCUMENTO -->
          <div class="form-group">
            <label for="doc">CPF</label>
            <input type="text" class="form-control" id="doc">
          </div>
          <!-- PUXAR ENDEREÇO A PARTIR DO CEP, COLOCAR CAMPOS DE NUMERO, COMPLEMENTO -->
          <div class="form-group">
            <label for="endereco">Endereço Completo</label>
            <input type="text" class="form-control" id="endereco">
          </div>
          <!-- TELEFONE SOMENTE NUMERICO..COMO FAZER? -->
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone">
          </div>
          <!-- VERIFICAR EMAIL -->
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
          </div>
           <li class="nav-item">
           <button> <a class="nav-link" href="dados_cliente" >Salvar</a></button>
          </li>
                 </form>
      </div>

    </div>
  </div>
</body>
 @include('footer')

</html>
