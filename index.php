<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css" >

    <title>Wypożyczalnia samochodówarning</title>
  </head>
  <body>
    <h1>CarRental</h1>
    <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
      <!-- Navbar content -->
    <!-- </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-4">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Strona główna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Linki</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usługi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Faktura</a>
          <a class="dropdown-item" href="#">Podstawienie</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Odebranie</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      <div class="container">
        <div class="row">
<!-- left column -->
          <div class="col-sm-3">
              <h3><small>tel: </small>+52 22 111 333</h3>
             <h4><small> mail: </small> carrental@offic.pl</h4>
            <!-- <h4>Car Rental </h4> -->
            <!-- <p> 00-123 Warszawa  ul. Marszałkowska 1</p> -->
            <a href="https://www.google.pl/maps/search/mapa/@50.0661443,19.9549054,16z" target="blanc">
            <img src="img/mapa.jpg" alt="mapa" class="img-thumbnail">
            </a>
          </div>
  <!-- slider start -->
          <div class="col-sm-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wypożyczalnia ekskluzywnych aut</h5>
            <p>VOLVO</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Mamy wszystkie marki</h5>
            <p>BMW</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wypożycz sobie które zechcesz</h5>
            <p>Audi</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
    </div>
    <!-- slider stop -->
  <!-- right column -->
    <div class="col-sm-3">


      <form>
        <div class="form-group">
          <label for="exampleFormControlSelect1"><h5>Wybierz auto i dodatki:</h5></label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Ford</option>
            <option>Opel</option>
            <option>Mercedes</option>
            <option>BMW</option>
            <option>Volvo</option>
          </select>
  <!-- data start         -->
            <label>Data odbioru</label>
            <input type="date" name="date_of_completion" style="width:150px" value="" placeholder=" ">
            <label> Data zwrotu : </label>
            <input type="date" name="date_of_completion" style="width:150px" value="" placeholder=" ">
<!-- date stop             -->
<!-- check box start-->
            <div class="form-check form-check">
              <h6>Wybierz opcje dodatkowe:</h6>
              <input class="form-check-input" type="checkbox" id="checkbox1" value="option1">
              <label class="form-check-label" for="checkbox1">Fotelik dziecięcy</label>
            </div>
            <div class="form-check form-check">
              <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
              <label class="form-check-label" for="checkbox2">Hak holowniczy</label>
            </div>
            <div class="form-check form-check mb-3">
              <input class="form-check-input" type="checkbox" id="checkbox3" value="option3">
              <label class="form-check-label" for="checkbox3">Bagażnik na rowery</label>
            </div>
<!-- check box stop -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Oblicz cenę</button>
  <!-- modal oblicz -->
  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Oblicz cenę</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><h4>Wybrałeś auto marki ...... na okres .... dni.</h4></p>
<!-- justify-content-start -->
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-6">
                <p><h5>Opcje dodatkowe :</h5></p>
            </div>
          </div>
          <div class="row justify-content-around">
            <div class="col-6">
              <p>  Fotelik dziecięcy<br />
                Bagażnik na rowery<br /></p>
            </div>
          </div>
        </div>
<!-- justify-content and -->
          <h4>Łączna cena to : <b>1542</b> PLN</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Zapłać</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>
<!-- modal oblicz end -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">Zamów auto</button>
  <!-- modal zamów start  -->
  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Powiadomienie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>Przykładowa treść maila z powiadomieniem o dokonaniu zamówienia auta wysyłana automatycznie
      na maila do firmy i klienta z przkierowaniem lub nie na kolejną podstronę. Np na stronę do logowania. <br />
    Można to oczywiście dodatkowo dowolnie rozbudować i wykorzystać. </p>
    <form>
  <div class="form-row">
    <div class="col-7">
      <input type="text" class="form-control" placeholder="Adres">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Miasto">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Kod">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="button" class="btn btn-primary">Wyslij gdzieś</button>
      </div>
    </div>
  </div>
</div>
<!-- modal zamów end -->
        </div>
      </form>


    </div>
  </div>
</div>
<!-- container end -->
<hr>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <!-- <label for="inputEmail4">Email</label> -->
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <!-- <label for="inputPassword4">Password</label> -->
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
</form>
  <h1 style="margin: 50px auto;
    text-align: center;">Pozostała - dowolna treść strony</h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
