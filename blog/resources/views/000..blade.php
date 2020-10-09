@include('header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
  <img src="cafezinho.jpg" alt="padrao" width="100%" height="110w">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-4 align-self-center">
        <div class="card">
          <article class="card-body">
            <a href="cadastro" class="float-right btn">CADASTRE-SE</a>
            <h3 class="card-title mb-4 mt-1">LOGIN</h3>
            <form class="" href="dados_cliente" method="post">
              <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="" class="form-control" placeholder="Seu e-mail">
              </div>
              <div class="form-group">
                <a href="#" class="float-right">Esqueceu a senha?</a>
                <label>Senha</label>
                <input class="form-control" type="password" placeholder="*******">
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label> <input type="checkbox"> Manter conectado </label>
                </div>
              </div>
               <li class="nav-item">
           <button> <a class="nav-link" href="dados_cliente" >Entrar</a></button>
          </li>
             
            </form>
          </article>
        </div>
      </div>
    </div>
  </div>
</body>
@include('footer')
</html>
