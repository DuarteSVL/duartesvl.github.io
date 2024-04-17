
<?php
    session_start(); // Starting the session
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    ?>




<?php

$id = "";
$titulo = "";
$texto = "";
$imagem = "";
$data = "";
$activo = "";
$ordem = "";

$errorMessage = "";
$successMessage = "";

include "db_conn.php";


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['id'])) {
        header('location: ./gerir_noticias.php');
        exit;
    }

    $id_noticia = $_GET['id'];

    $sql = "SELECT * FROM noticia WHERE id_noticia=$id_noticia";
    $result = $ligacaoBD->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header('location: ./gerir_noticias.php');
        exit;
    }

    $id = $row['id_noticia'];
    $titulo = $row['titulo'];
    $texto = $row['texto'];
    $imagem = $row['imagem'];
    $ordem = $row['ordem'];
    // Check if 'data' and 'activo' are set in the row before assigning them
    $data = isset($row['data']) ? $row['data'] : '';
    $activo = isset($row['activo']) ? $row['activo'] : '';
} else {
    $id = $_POST['id_noticia'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $ordem = $_POST['ordem'];
    // Check if 'data' and 'activo' are set in the $_POST array before assigning them
    $data = isset($_POST['data']) ? $_POST['data'] : '';
    $imagem = isset($_POST['imagem']) ? $_POST['imagem'] : '';
    $activo = isset($_POST['activo']) ? $_POST['activo'] : '';

    do {
        if (empty($titulo) || empty($texto) || empty($imagem)) {
            $errorMessage = "Campos necessários por preencher";
            break;
        }

        $sql = "UPDATE noticia "
            . "SET titulo = '$titulo', texto = '$texto', imagem = '$imagem', data = '$data', activo = '$activo', ordem = '$ordem'"
            . "WHERE id_noticia = $id";

        $result = $ligacaoBD->query($sql);

        if (!$result) {
            $errorMessage = "Query inválida: " . $ligacaoBD->error;
            break;
        }

        $successMessage = "Editado com sucesso.";

        header('location: ./gerir_noticias.php');
        exit;
    } while (false);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar notícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   

        <style>
        .submit-btn {
            width: 100%;
        }

        .cancel-btn {
            width: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            background-color: rgba(0, 128, 0, 0.3);
            padding: 20px;
            border-radius: 10px;
        }

        .form-control,
        .btn {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>




    <div class="container my-5">
        <h2>Editar notícia</h2>
        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <input type="hidden" name="id_noticia" value="<?php echo $id; ?>">

            <div class="row-mb-3">
                <label class="col-sm-3 col-form-label">Título</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="titulo" value="<?php echo $titulo; ?>">
                </div>
                <label class="col-sm-3 col-form-label">Texto</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="texto" rows="5"><?php echo $texto ?></textarea>
                </div>


                <label class="col-sm-3 col-form-label">Filename da imagem</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="imagem" value="<?php echo $imagem; ?>">
                </div>






                <label class="col-sm-3 col-form-label">Prioridade</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ordem" value="<?php echo $ordem; ?>">
                </div>
                <div class="col-sm-6">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" value="<?php echo $data; ?>">
                </div>



                <?php
                if (isset($row) && $row['activo'] == 0) {
                    echo "
                    <div class='form-check'>
                    <fieldset>
                        <input class='form-check-input' type='checkbox' value='1' id='activo' name='activo'>
                        <label class='form-check-label' for='activo'>
                            Activo
                        </label>
                    </fieldset>
                </div>
                    ";
                } else {
                    echo "
                    <div class='form-check'>
                    <fieldset>
                        <input class='form-check-input' type='checkbox' value='1' id='activo' name='activo' checked>
                        <label class='form-check-label' for='activo'>
                            Activo
                        </label>
                    </fieldset>
                </div>
                    
                    ";
                }
                ?>




                <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
                <div class="row mb-3" id="buttons-div">
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                    <div class="col-sm-3">
                        <a class="btn btn-outline-primary cancel-btn" href="./gerir_noticias.php"
                            role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>