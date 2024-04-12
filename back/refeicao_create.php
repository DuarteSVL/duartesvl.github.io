<?php

$servidor = "localhost";
$baseDados = "ementas";
$userBaseDados = "root";
$passwordBasedados = "";
$ligacaoBD =
    mysqli_connect($servidor, $userBaseDados, $passwordBasedados, $baseDados)
    or die("ERRO no acesso à DB");

$nome = "";
$tipo = "";
$descricao = "";

$errorMessage = "";
$successMessage = "";




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];

    do {
        if ((empty($nome) || empty($tipo))) {
            $errorMessage = "Os campos nome e tipo são necessários";
            break;
        }

        $sql = "INSERT INTO refeicao (nome, tipo, descricao) " .
        "VALUES ('$nome', '$tipo', '$descricao')";
        $result = $ligacaoBD->query($sql);

        if (!$result) {
            $errorMessage = "Query inválida: " . $ligacaoBD->error;
            break;
        }


        $nome = "";
        $tipo = "";
        $descricao = "";

        $successMessage = "Refeição adicionada.";

        header("location: ./gerir_ementas.php");
        exit();

    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar refeição</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="refeicao_create.css">
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova refeição</title>
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
        <h2>Nova refeição</h2>
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
                <label class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
                </div>
                <label for="tipo" class="test">Tipo de refeição:</label>
                <div class="col-sm-6">
                    <select name="tipo" id="tipo_select" class="select">
                        <optgroup label="Berçário">
                            <option value="Reforço_Matinal">Reforço Matinal</option>
                            <option value="Sopa">Sopa</option>
                            <option value="Prato">Prato</option>
                            <option value="Sobremesa">Sobremesa</option>
                            <option value="Lanche">Lanche</option>
                        </optgroup>
                        <optgroup label="Creche">
                            <option value="Reforço_Matinal">Reforço Matinal</option>
                            <option value="Sopa">Sopa</option>
                            <option value="Prato">Prato</option>
                            <option value="Merenda">Merenda</option>
                        </optgroup>
                        <optgroup label="Básico">
                            <option value="Sopa">Sopa</option>
                            <option value="Prato">Prato</option>
                            <option value="Dieta">Dieta</option>
                            <option value="Vegetariano">Vegetariano</option>
                            <option value="Sobremesa">Sobremesa</option>
                            <option value="Lanche">Lanche</option>
                        </optgroup>
                    </select>
                </div>
                <label class="col-sm-3 col-form-label">Descrição</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="descricao" value="<?php echo $descricao ?>">
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
                        <a class="btn btn-outline-primary cancel-btn" href="./gerir_ementas.php"
                            role="button">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

</html>