
@include('header')
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Byronbay Coffeeshop</title>
</head>
<body>
  <div class="container">
    <br>
    <a href="produtos">
      <img src="banner.PNG" alt="Compre" style="padding-bottom: 50px" width="100%">
    </a>
    <div class="row">
      <img src="tarja.jpg" alt="info" class="rounded mx-auto d-block" width="100%">
    </div>

    <hr>
    <h2 class="font-weight-bold">NOSSOS PRODUTOS</h2>
    <div class="row">
      <div class="col-3">
        <a href="produto"><img src="cafe1.png" alt=""></a>
        <p class="text-center">Café bla bla bla</p>
        <div class="row">
          <div class="col-6">
            <p style="font-weight: bold">R$ 19,90</p>
          </div>
          <div class="col-6">
            <a href="produto" class="btn" type="button" name="button">COMPRAR</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <a href="produto"><img src="cafe2.png" alt=""></a>
        <p class="text-center">Café xxx</p>
        <div class="row">
          <div class="col-6">
            <p style="font-weight: bold">R$ 19,90</p>
          </div>
          <div class="col-6">
            <a href="produto.php" class="btn" type="button" name="button">COMPRAR</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <a href="produto"><img src="cafe3.jpg" alt=""></a>
        <p class="text-center">Café yyy</p>
        <div class="row">
          <div class="col-6">
            <p style="font-weight: bold">R$ 19,90</p>
          </div>
          <div class="col-6">
            <a href="produto" class="btn" type="button" name="button">COMPRAR</a>
          </div>
        </div>
      </div>
      <div class="col-3">
        <a href="produto"><img src="cafe4.jpg" alt=""></a>
        <p class="text-center">Café zzz</p>
        <div class="row">
          <div class="col-6">
            <p style="font-weight: bold">R$ 19,90</p>
          </div>
          <div class="col-6">
            <a href="produto" class="btn" type="button" name="button">COMPRAR</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <a href="produtos" class="float-right">Ver todos os produtos</a>
    <br>
    <hr>
    <h2 class="font-weight-bold">NOSSOS PRODUTORES</h2>
    <div class="row">
      <div class="col-4">
        <a href="produtor">
          <img src="prod1.jpg" alt="" width="100%" height="200w"></a>
          <h5 class="text-center font-weight-bold mt-1" >Sr. João</h5>
          <h5 class="text-center">Belo Horizonte/MG</h5>
        </div>
        <div class="col-4">
          <a href="produtor">
            <img src="prod2.jpg" alt="" width="100%" height="200w"></a>
            <h5 class="text-center font-weight-bold mt-1">Dona Maria</h5>
            <h5 class="text-center">Salvador/BA</h5>
          </div>
          <div class="col-4">
            <a href="produtor">
              <img src="prod3.jpg" alt="" width="100%" height="200w"></a>
              <h5 class="text-center font-weight-bold mt-1">Paulãssssssssso</h5>
              <h5 class="text-center">Curitiba/PR</h5>
            </div>
          </div>
          <a href="produtores" class="float-right">Ver todos os produtores</a>
          <br>
          <hr>
          <div class="row">
            <div class="col-4">
              <h3 class="text-center font-weight-bold">TIPOS DE CAFÉ</h3>
            </div>
            <div class="col-4">
              <h3 class="text-center font-weight-bold">DICAS DE PREPARO</h3>
            </div>
            <div class="col-4">
              <h3 class="text-center font-weight-bold">HISTÓRIA</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <a href="tipos">
              <img src="tipos.jpg" alt="" width="100%" height="250w"></a>
            </div>
            <div class="col-4">
              <a href="dicas">
              <img src="dicas.jpg" alt="" width="100%" height="250w"></a>
            </div>
            <div class="col-4">
              <a href="historia">
              <img src="cultivo.jpg" alt="" width="100%" height="250w"></a>
            </div>
          </div>
        </div>
      </body>
  @include('footer')
      </html>
