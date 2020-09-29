@include('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Produto</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row mt-5">
      <div class="col-4">
        <img src="cafe1.png" alt="cafe1" width="100%" height="300w">
      </div>
      <div class="col-4">
        <h3>Café bla bla bla</h3>
        <h4>Peso: 500g</h4>
        <h4>Moagem: Grãos</h4>
        <br>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-4">
        <h3>R$ 19,90</h3>
        <hr>
        
                 <label>Quantidade:</label>
          <input class="btn" type="button" id="plus" value='-' onclick="process(-1)" />
          <input id="quant" name="quant" class="text-center" size="1" type="text" value="1" maxlength="5" />
          <input class="btn" type="button" id="minus" value='+' onclick="process(1)">
          <div class="row mt-5 justify-content-end">
          
            <button><a class="nav-link" href="carrinho" >COMPRAR</a></button>
          </div>
      
      </div>
    </div>
  </div>
</body>
@include('footer')
</html>
<!-- SITE PARA PEGAR O JAVASCRIPT DO BOTÃO DE QTDE -->
<!-- https://traydevelopers.zendesk.com/hc/pt-br/articles/212063398-Bot%C3%B5es-Quantidade -->
