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
    <h1>Car Rental</h1>
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
            <p>marka</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wypożyczalnia ekskluzywnych aut</h5>
            <p>marka</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wypożyczalnia ekskluzywnych aut</h5>
            <p>marka</p>
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
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Fotelik dziecięcy</label>
            </div>
            <div class="form-check form-check">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Hak holowniczy</label>
            </div>
            <div class="form-check form-check mb-3">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
              <label class="form-check-label" for="inlineCheckbox3">Bagaznik na rowery</label>
            </div>
<!-- check box stop -->
            <button type="button" class="btn btn-primary">Oblicz cenę</button>
            <button type="button" class="btn btn-warning">Zamów auto</button>
        </div>
      </form>


    </div>
  </div>
</div>
<!-- container end -->
<hr>
  <h1 style="margin: 50px auto;
    text-align: center;">Pozostała - dowolna treść strony</h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
