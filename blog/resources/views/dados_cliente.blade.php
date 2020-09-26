@include('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Meus dados</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <h3 class="text-center">Meus dados</h3>
    <hr>
    <div class="row justify-content-center">
      <div class="col-5">
        <h4>XXX</h4>
        <h5>E-mail: xxx@hotmail.com</h5>
        <h5>Tel: (11) 123456789</h5>
        <h5>Endereço: Rua xxx</h5>
      </div>
      <div class="col-5">
        <a href="editar_clientes"><h4>Editar dados</h4></a>
        <br>
        <a href="meus_pedidos"><h4>Meus pedidos<h4></a>
        </div>
      </div>
    </div>

  </body>
  @include('footer')
  </html>
