@include('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Nossos produtos</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <h2 class="text-center">NOSSOS CAFÉS</h2>
    <hr>
    <div class="row justify-content-center">
      <div class="col-9">
        <div class="row">
          <div class="col-4">
            <a href="produto">
              <img src="cafe1.png" alt=""></a>
              <p class="text-center">Café bla bla bla</p>
              <div class="row">
                <div class="col-6">
                  <p style="font-weight: bold">R$ 19,90</p>
                </div>
                <div class="col-6">
                  <a href="produto" class="btn" type="button" name="button">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col-4">
              <a href="produto">
                <img src="cafe1.png" alt=""></a>
                <p class="text-center">Café bla bla bla</p>
                <div class="row">
                  <div class="col-6">
                    <p style="font-weight: bold">R$ 19,90</p>
                  </div>
                  <div class="col-6">
                    <a href="produto" class="btn" type="button" name="button">Comprar</a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <a href="produto">
                <img src="cafe1.png" alt=""></a>
                <p class="text-center">Café bla bla bla</p>
                <div class="row">
                  <div class="col-6">
                    <p style="font-weight: bold">R$ 19,90</p>
                  </div>
                  <div class="col-6">
                    <a href="produto" class="btn" type="button" name="button">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
   @include('footer')
    </html>
