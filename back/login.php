<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="login.css">
  <script src="login.js"></script>


</head>
<body>
  <section class="container d-none d-lg-block" id="login_section">
    <div class="row">
      <div class="col d-flex justify-content-center align-items-center" id="">
        <h4 class="d-none d-md-block">Login</h4>
      </div>
    </div>

    <div class="row" id="login_form">
      <div class="col d-flex justify-content-center align-items-center" id="">
        <form action="login_action.php" method="POST">
          <div id="error-container">
            

            <?php if (isset($_GET['error'])) { ?>
              <p id="error-message"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="col d-flex justify-content-center align-items-center" id="">
            <button type="submit" class="btn btn-primary" id="login_button">Fazer login</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>




</html>