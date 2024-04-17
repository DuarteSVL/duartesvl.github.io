<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestão de conteúdo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="main.css">
    <script src="login.js"></script>

    <?php
    session_start(); // Starting the session
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    ?>




</head>

<body>

    <section class="container d-none d-lg-block" id="login_section">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center" id="title">
                <h4 class="d-none d-md-block" id="titleHeader">Gestão de conteúdo</h4>
            </div>
        </div>

        <div class="row" id="">
            <div class="col d-flex justify-content-center align-items-center" id="">
                <div>
                    <button type="submit" class="btn btn-primary" id="ementas_button"
                        onclick="document.location='./gerir_ementas.php'">Gerir ementas</button>
                </div>
            </div>
        </div>
        <div class="row" id="">
            <div class="col d-flex justify-content-center align-items-center" id="">
                <div>
                    <button type="submit" class="btn btn-primary" id="noticias_button"
                        onclick="document.location='./gerir_noticias.php'">Gerir notícias</button>
                </div>
            </div>
        </div>
        <div class="row" id="">
            <div class="col d-flex justify-content-center align-items-center" id="">
                <div>
                    <button type="submit" class="btn btn-primary" id="noticias_button"
                        onclick="document.location='./gerir_tabelas.php'">Gerir tabelas</button>
                </div>
            </div>
        </div>

        <div class="row" id="">
            <div class="col d-flex justify-content-center align-items-center" id="">
                <div>
                    <form action="./logout.php" method="post">
                        <button type="submit" class="btn btn-primary" id="logout_button">Logout</button>
                    </form>
                </div>
            </div>
        </div>


    </section>






    </div>
    </section>


</body>

</html>