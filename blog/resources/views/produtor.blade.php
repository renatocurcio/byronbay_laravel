@include('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Produtor</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row mt-5">
      <div class="col-5">
        <img src="prod1.jpg" alt="cafe1" width="100%" height="300w">
      </div>
      <div class="col-7">
        <h3>Sr. João</h3>
        <hr>
        <h5>Belo Horizonte/MG</h5>
        <br>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <a class="float-right" href="produtos">Ver produtos</a>
      </div>
    </div>
  </div>
</body>
 @include('footer')
</html>
