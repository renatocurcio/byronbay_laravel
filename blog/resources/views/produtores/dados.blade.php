@include ('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Meus dados</title>
</head>
<body>
  <img src="img/cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <h3 class="text-center">Meus dados</h3>
    <hr>
    <div class="row justify-content-center">
      <div class="col-5">
        <img src="img/prod1.jpg" alt="cafe1" width="100%" height="300w">
        <br>
        <h3>Sr. João</h3>
        <h5>Belo Horizonte/MG</h5>
        <br>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>
      <div class="col-5">
        <a href="editar_produtores.php"><h4>Editar dados</h4></a>
        <br>
        <a href="meus_produtos.php"><h4>Meus produtos</h4></a>
        <br>
        <a href="cadastro_produtos.php"><h4>Cadastrar produto</h4></a>
      </div>
    </div>


  </div>

</body>
@include ('footer')
</html>
