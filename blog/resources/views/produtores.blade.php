@include('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nossos produtores</title>
  </head>
  <body>
    <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
    <div class="container">
      <h2 class="text-center">NOSSOS PRODUTORES</h2>
      <hr>
      <div class="row">
        <div class="col-4">
          <a href="produtor">
          <img src="prod1.jpg" alt="" width="100%" height="200w"></a>
          <h4 class="text-center">Sr. João</h4>
        </div>
        <div class="col-4">
          <a href="produtor">
          <img src="prod2.jpg" alt="" width="100%" height="200w"></a>
          <h4 class="text-center">Dona Maria</h4>
        </div>
        <div class="col-4">
          <a href="produtor">
          <img src="prod3.jpg" alt="" width="100%" height="200w"></a>
          <h4 class="text-center">Paulão</h4>
        </div>
      </div>
    </div>
  </body>
  @include('footer')
</html>
