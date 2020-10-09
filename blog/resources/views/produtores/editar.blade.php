@include ('header')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro de produtores</title>
</head>
<body>
  <img src="img/cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-center">Editar cadastro de produtor</h2>
        <hr>
        <form action="dados_produtor.php" method="post">
          <div class="form-group">
            <label for="empresa">Razão Social</label>
            <input type="text" class="form-control" id="empresa">
          </div>
          <div class="form-group">
            <label for="contato">Contato</label>
            <input type="text" class="form-control" id="contato" placeholder="Nome Completo para contato">
          </div>
          <!-- VERIFICAR DOCUMENTO -->
          <div class="form-group">
            <label for="doc">CNPJ ou CPF</label>
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
          <div class="form-group">
            <label for="resumo">Sua história</label>
            <textarea class="form-control" id="resumo" rows="8"></textarea>
          </div>
          <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control-file" id="imagem">
          </div>
          <button type="submit" class="btn btn-lg btn-block" name="button">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</body>
@include ('footer')
</html>
