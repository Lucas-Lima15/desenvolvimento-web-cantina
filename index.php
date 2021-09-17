<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- ================================================================================================================= -->


  <title>Cantina online</title>
</head>

<body>
  <header>
    <!-- Prender no topo com fixed-top e ajeitar o titulo -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#navbarNav">
          <img src="img/cantina-web.png" alt="" width="100" height="100" class="d-inline-block align-text-top">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#objetivos">Objetivo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vantagens">Vantagens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sua-escola">Sua Escola</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#equipe">Equipe</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container" id="objetivos">
      <div class="row text-center">
        <div class="col-lg-6">
          <h3>Nosso Objetivo</h3>
          <p>
            O sistema foi criado para ser um facilitador na hora do lanche, ele permite a
            organização da cantina quanto a demanda, controle dos pais e organizaçãona hora
            que for pegar o lanche.
          </p>
        </div>
        <div class="col-lg-6">
          <img src="img/cantina1.jfif" alt="">
        </div>
      </div>
    </div>
    <div class="container espaco" id="vantagens">
      <div class="row text-center">
        <h3>Vantagens</h3>
        <div class="col-lg-4">
          <img src="img/cantina2.jfif" alt="">
          <h5>Organização</h5>
          <p>
            Fica muito mais facil pegar o lanche
          </p>
        </div>
        <div class="col-lg-4">
          <img src="img/cantina3.jfif" alt="">
          <h5>Controle</h5>
          <p>
            Tem alergia a alguma comida? Sem problema, nos bloqueamos
          </p>
        </div>
        <div class="col-lg-4">
          <img src="img/cantina4.jfif" alt="">
          <h5>Antecipe</h5>
          <p>Compre antes da hora do recreio e seja feliz</p>
        </div>
      </div>
    </div>
    <div class="container espaco" id="sua-escola">
      <div class="row text-center">
        <h3>Sua escola</h3>
        <div class="col-lg-6">
          <h5>Escola do Bomfim</h5>
          <img src="img/escola1.jfif" alt="">
          <p>
            <a href="login.php"><button class="btn btn-primary btn-lg">Fazer Login</button></a>
          </p>
        </div>
        <div class="col-lg-6">
          <h5>Escola Colorir a Vida</h5>
          <img src="img/escola2.jfif" alt="">
          <p>
            <a href="login.php"><button class="btn btn-primary btn-lg">Fazer Login</button></a>
          </p>
        </div>
      </div>
    </div>
    <div class="container espaco" id="equipe">
      <div class="row text-center">
        <h3>Equipe</h3>
        <div>

        </div>
        <div class="col-lg-3" style="margin-top: 50px;">
          <p>
            Nome: Lucas Vinicius Costa Lima
          </p>
          <p>
            Matricula: 144172004
          </p>
          <p>
            Email: lucasvinilima15@gmail.com
          </p>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container espaco text-center">
      github: <a href="https://github.com/Lucas-Lima15/desenvolvimento-web-cantina" target="_blank">https://github.com/Lucas-Lima15/desenvolvimento-web-cantina</a>
    </div>
  </footer>

  <!-- JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>