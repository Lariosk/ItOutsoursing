<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/styleEvs.css">
    <link rel="stylesheet" href="../../css/evaluaciones.css">
    <title>IT O | Evaluaciones </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="LoginEvaluacion.php"><img src="../../img/LogoITO.png" style="width:4rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="LoginEvaluacion.php">Login Evaluación</a>
            <a class="nav-link" href="Evaluaciones.php">Evaluaciones</a>
            <a class="nav-link" href="Examen.php">Examen</a>
            <a class="nav-link" href="../Admin/RankingAspirantes.php">Ranking</a>
        </div>
        </div>
    </div>
    </nav>
    <main>
    <br><br><br>
        <section class="vh-100" >
          <h1 >Evaluaciones</h1>          
          <div id="exam">
            <div id="exam1">
              <div id="icono">
                  <img src="../../img/conocimiento.png" style="max-width:100%;width:auto;height:auto;max-height:80%;align:middle;">
              </div>
                 <p>Conocimiento</p>
              <div id="txtExam">
                <p>Evaluacion sin realizar.</p>
              </div>
              <div id="btnExam">
                <p><a href="Examen.php">Realizar</a></p>
              </div>
            </div>

            <div id="exam2">
              <div id="icono">
                  <img src="../../img/psicometrico.png" style="max-width:100%;width:auto;height:auto;max-height:80%;align:middle;">
              </div>
                 <p>Psicometrico</p>
              <div id="txtExam2">
                <p>Realizar primero el examen de conocimiento.</p>
              </div>
              <div id="btnExam2">
                <p><a href="Evaluaciones.php">No disponible</a></p>
             </div>

           </div>    
        </section>
    </main>
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Recuerda que el modulo de evaluaciones debe contestarse de manera honesta, cualquier indicio de trampa sera motivo de cancelación
      </p>
    </section>
    <!-- Section: Text -->


  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    IT Outsoursing© 2022 Copyright
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>
