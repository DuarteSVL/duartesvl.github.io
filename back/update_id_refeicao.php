

<?php
include "db_conn.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if id_celula and nova_refeicao are set
    if (isset($_POST['id_celula']) && isset($_POST['nova_refeicao'])) {
        // Sanitize inputs to prevent SQL injection
        $id_celula = mysqli_real_escape_string($ligacaoBD, $_POST['id_celula']);
        $nova_refeicao = mysqli_real_escape_string($ligacaoBD, $_POST['nova_refeicao']);

        // Update the id_refeicao in the celula table
        $update_query = "UPDATE celula SET id_refeicao = '$nova_refeicao' WHERE id_celula = '$id_celula'";
        $update_result = mysqli_query($ligacaoBD, $update_query);

        if ($update_result) {
            // Redirect back to the page where the form was submitted
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($ligacaoBD);
        }
    } else {
        echo "id_celula or nova_refeicao is not set";
    }
} else {
    echo "Form not submitted";
}
?>
