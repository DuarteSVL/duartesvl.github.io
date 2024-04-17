
<?php
    session_start(); // Starting the session
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    ?>



<?php

$id = "";
$nome = "";
$tipo = "";
$descricao = "";

$errorMessage = "";
$successMessage = "";



include "db_conn.php";



if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET['id'])) {
        header('location: ./gerir_ementas.php');
        exit;
    }

    $id_refeicao = $_GET['id'];

    $sql = "select * from refeicao where id_refeicao=$id_refeicao";
    $result = $ligacaoBD->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header('location: ./gerir_ementas.php');
        exit;
    }

    $id = $row['id_refeicao'];
    $nome = $row['nome'];
    $tipo = $row['tipo'];
    $descricao = $row['descricao'];
} else {
    $id = $_POST['id_refeicao'];
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];

    do {
        if (empty($id) || empty($nome) || empty($tipo)) {
            $errorMessage = 'Todos os campos menos a descrição são necessários.';
            break;
        }

        $sql = "UPDATE refeicao "
            . "set nome = '$nome', tipo = '$tipo', descricao = '$descricao' "
            . "where id_refeicao = $id";

        $result = $ligacaoBD->query($sql);

        if (!$result) {
            $errorMessage = "Query inválida: " . $ligacaoBD->error;
            break;
        }

        $successMessage = "Editado com sucesso.";

        header('location: ./gerir_ementas.php');
        exit;

    } while (false);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar refeição</title>
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
            <input type="hidden" name="id_refeicao" value="<?php echo $id; ?>">

            <div class="row-mb-3">
                <label class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>">
                </div>
                <label for="tipo" class="test">Tipo de refeição:</label>
                <div class="col-sm-6">
                    <select name="tipo" id="tipo_select" class="select">
                        <optgroup label="Berçário">
                            <option value="Reforco_Matinal" <?php echo ($tipo == 'Reforco_Matinal') ? 'selected' : ''; ?>>
                                Reforco Matinal</option>
                            <option value="Sopa" <?php echo ($tipo == 'Sopa') ? 'selected' : ''; ?>>Sopa</option>
                            <option value="Prato" <?php echo ($tipo == 'Prato') ? 'selected' : ''; ?>>Prato</option>
                            <option value="Sobremesa" <?php echo ($tipo == 'Sobremesa') ? 'selected' : ''; ?>>Sobremesa
                            </option>
                            <option value="Lanche" <?php echo ($tipo == 'Lanche') ? 'selected' : ''; ?>>Lanche</option>
                        </optgroup>
                        <optgroup label="Creche">
                            <option value="Reforco_Matinal" <?php echo ($tipo == 'Reforco_Matinal') ? 'selected' : ''; ?>>
                                Reforco Matinal</option>
                            <option value="Sopa" <?php echo ($tipo == 'Sopa') ? 'selected' : ''; ?>>Sopa</option>
                            <option value="Prato" <?php echo ($tipo == 'Prato') ? 'selected' : ''; ?>>Prato</option>
                            <option value="Merenda" <?php echo ($tipo == 'Merenda') ? 'selected' : ''; ?>>Merenda</option>
                        </optgroup>
                        <optgroup label="Básico">
                            <option value="Sopa" <?php echo ($tipo == 'Sopa') ? 'selected' : ''; ?>>Sopa</option>
                            <option value="Prato" <?php echo ($tipo == 'Prato') ? 'selected' : ''; ?>>Prato</option>
                            <option value="Dieta" <?php echo ($tipo == 'Dieta') ? 'selected' : ''; ?>>Dieta</option>
                            <option value="Vegetariano" <?php echo ($tipo == 'Vegetariano') ? 'selected' : ''; ?>>
                                Vegetariano</option>
                            <option value="Sobremesa" <?php echo ($tipo == 'Sobremesa') ? 'selected' : ''; ?>>Sobremesa
                            </option>
                            <option value="Lanche" <?php echo ($tipo == 'Lanche') ? 'selected' : ''; ?>>Lanche</option>
                        </optgroup>
                    </select>

                </div>
                <label class="col-sm-3 col-form-label">Descrição</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="descricao" value="<?php echo $descricao; ?>">
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