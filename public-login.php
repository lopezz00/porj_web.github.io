<!doctype html>
<html lang="en">
  <head>
    <script src="../js/cookies.js" defer></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main2.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
  </head>

  <body>
    <div class="login">
      <h1 class="text-center">Log in</h1>
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span8">
              <img src="css/img/upc_entrada.jpeg" width="100%" height="100%">
            </div>
            <div class="span4">
              <div class="clearfix"></div>
              <aside class="right-sidebar">
                <br>
                <br>
                <form class ="needs-validation" method="GET">
                  <div class="form-group">
                      <label class="form-label" for="email">Correu electrònic</label>
                      <input class="form-control" type="email" id="email_login"  required>
                  </div>
                  <div class="form-group">
                      <label for="password">Contrasenya</label>
                      <input class="form-control" type="password" id="password_login" required>
                      <!--<div class="invalid-feedback">Incorrect.</div>-->
                  </div>
                  <input class="btn btn-primary w-100" type="submit" value="Identifica't">

                  <!--<input type="submit" value="Submit">Identifica't</button>-->
                </form>
              </aside>
            </div>
          </div>
        </div>
      </section>
  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
