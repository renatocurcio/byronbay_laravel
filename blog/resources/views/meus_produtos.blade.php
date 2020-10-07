@include ('header')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Meus produtos</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-center">Meus produtos</h2>
        <hr>
        <a href="cadastro_produtos.php" class="float-right">Cadastrar novo produto</a>
        <table class="table text-center">
          <thead>
            <tr class="font-weight-bold">
              <th scope="col">ID</th>
              <th scope="col">Produto</th>
              <th scope="col">Preço</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <td>1</td>
            <td>Café blablabla</td>
            <td>R$19,90</td>
            <td><a href="editar_produtos.php">Editar</a></td>
            <td><a href="#">Excluir</a></td>
          </tbody>
        </table>
        <a href="dados_produtor.php" class="btn" type="button" name="button">Voltar</a>
      </div>
    </div>
  </div>

  <!-- MOSTRAR MSG DE SUCESSO -->
      @if(isset($resultado))
        @if($resultado)
          <div class="alert alert-success text-center" role="alert">
            Produto cadastrado com sucesso!
          </div>
        @else
          <div class="alert alert-danger" role="alert">
            Erro ao salvar!
          </div>
        @endif
      @endif



</body>
@include ('footer')
</html>
