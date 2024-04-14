<?php


include "db_conn.php";


$titulo = "";
$imagem = "";
$texto = "";
$data = "";
$activo = "";
$ordem = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $imagem = $_POST['imagem'];
    $ordem = $_POST['ordem'];
    $data = $_POST['data'];
    // Check if 'activo' is set, otherwise set it to 0
    $activo = isset($_POST['activo']) ? $_POST['activo'] : 0;

    do {
        if (empty($titulo) || empty($texto) || empty($imagem)) {
            $errorMessage = "Campos necessários por preencher";
            break;
        }

        $sql = "INSERT INTO noticia (titulo, texto, imagem, data, activo, ordem) " .
            "VALUES ('$titulo', '$texto', '$imagem', '$data', '$activo', '$ordem')";
        $result = $ligacaoBD->query($sql);

        if (!$result) {
            $errorMessage = "Query inválida: " . $ligacaoBD->error;
            break;
        }

        $successMessage = "Notícia adicionada.";
        // Redirect to the page after successful insertion
        header("location: ./gerir_noticias.php");
        exit();
    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar notícia</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="noticia_create.css">
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova notícia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .submit-btn {
            width: 100%;
        }

        .cancel-btn {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2>Nova notícia</h2>
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
            <div class="row-mb-3">
                <label class="col-sm-3 col-form-label">Título</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="titulo" value="<?php echo $titulo ?>">
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
                    <label for="date">Data:</label>
                    <input type="date" id="data" name="data">
                </div>


                <div class='form-check'>
                    <fieldset>
                        <input class='form-check-input' type='checkbox' value='1' id='activo' name='activo'>
                        <label class='form-check-label' for='activo'>
                            Activo
                        </label>
                    </fieldset>
                </div>
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

</html>