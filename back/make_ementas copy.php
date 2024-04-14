<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ementas - CCR CCR</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/styles_geral.css">
</head>

<body>
    
    <div class="container my-5">

    <div class="container-xxl all-content bg-white p-0">
        


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header-ementas position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Ementas</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Ínicio</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Ementas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Título Inicial -->
                
                <div class="row align-items-center">
                    <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <h1 class="mb-4"><a href="./make_ementas.php">Ementas da Semana</h1>
                    </div>
                </div>
        <!-- Título Inicial -->

        
<!-- Menu Ementas -->

<div class="btn-group-lg" id="btnContactos">
        <button type="button" class="btn" onclick="mudarMenu('bercario')">Berçário</button>
        <button type="button" class="btn" onclick="mudarMenu('creche')">Creche</button>
        <button type="button" class="btn" onclick="mudarMenu('jardim')">Jardim de Infância</button>
        <button type="button" class="btn" onclick="mudarMenu('1ciclo')">1º Ciclo</button>
        <button type="button" class="btn" onclick="mudarMenu('centro')">Centro de Apoio Escolar</button>
      </div>  

      
      <br><br>
      <div class="d-flex justify-content-center">

        <!-- Berçário -->
        <div style="display: block;" class="submenu" id="bercario">
            
            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="table-responsive rounded">
                    <?php

include "db_conn.php";

?>



<table class="table">
    <tr>
        <th></th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
    </tr>
    <tr>
        <th>Sopa</th>
        <?php
     
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Prato</th>
        <?php
      
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Dieta</th>
        <?php
        
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Vegetariano</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Sobremesa</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Lanche</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
</table>
                    </div>
                  </div>
                </div>
              </div>

       </div>


      <!-- Creche -->
           <div style="display: none;" class="submenu" id="creche">

            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="table-responsive rounded">
                      <?php

        include "db_conn.php";

        ?>



        <table class="table">
            <tr>
                <th></th>
                <th>Segunda-feira</th>
                <th>Terça-feira</th>
                <th>Quarta-feira</th>
                <th>Quinta-feira</th>
                <th>Sexta-feira</th>
            </tr>
            <tr>
                <th>Sopa</th>
                <?php
             
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Prato</th>
                <?php
              
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Dieta</th>
                <?php
                
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Vegetariano</th>
                <?php
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Sobremesa</th>
                <?php
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
            <tr>
                <th>Lanche</th>
                <?php
                
                // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
                $query = "SELECT r.nome
                  FROM celula c
                  INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
                  WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
                  ORDER BY c.id_celula ASC";

                $result = mysqli_query($ligacaoBD, $query);

                // Loop through the fetched data and populate the table cells
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<td>' . $row['nome'] . '</td>';
                }
                ?>
            </tr>
        </table>
                    </div>
                  </div>
                </div>
              </div>
            
      </div>
           
      <!-- Jardim de Infância -->
           <div style="display: none;" class="submenu" id="jardim">

            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="table-responsive rounded">
                    <?php

include "db_conn.php";

?>



<table class="table">
    <tr>
        <th></th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
    </tr>
    <tr>
        <th>Sopa</th>
        <?php
     
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Prato</th>
        <?php
      
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Dieta</th>
        <?php
        
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Vegetariano</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Sobremesa</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Lanche</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
</table>
                    </div>
                  </div>
                </div>
              </div>
            
      </div>

      <!-- 1º Ciclo -->
           <div style="display: none;" class="submenu" id="1ciclo">

            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="table-responsive rounded">
                    <?php

include "db_conn.php";

?>



<table class="table">
    <tr>
        <th></th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
    </tr>
    <tr>
        <th>Sopa</th>
        <?php
     
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Prato</th>
        <?php
      
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Dieta</th>
        <?php
        
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Vegetariano</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Sobremesa</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Lanche</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
</table>
                    </div>
                  </div>
                </div>
              </div>
            
      </div>

      <!-- Centro de Apoio Escolar -->
           <div style="display: none;" class="submenu" id="centro">

            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="table-responsive rounded">
                    <?php

include "db_conn.php";

?>



<table class="table">
    <tr>
        <th></th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
    </tr>
    <tr>
        <th>Sopa</th>
        <?php
     
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sopa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sopa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Prato</th>
        <?php
      
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Prato' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Prato' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Dieta</th>
        <?php
        
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Dieta' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Dieta' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Vegetariano</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Vegetariano' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Vegetariano' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Sobremesa</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Sobremesa' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Sobremesa' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
    <tr>
        <th>Lanche</th>
        <?php
        
        // Query to fetch 'nome' values where 'tipo' is equal to 'Lanche' and 'valencia' is equal to 'Basico', ordered by 'id_celula'
        $query = "SELECT r.nome
          FROM celula c
          INNER JOIN refeicao r ON c.id_refeicao = r.id_refeicao
          WHERE c.tipo = 'Lanche' AND c.valencia = 'Basico'
          ORDER BY c.id_celula ASC";

        $result = mysqli_query($ligacaoBD, $query);

        // Loop through the fetched data and populate the table cells
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<td>' . $row['nome'] . '</td>';
        }
        ?>
    </tr>
</table>
                    </div>
                  </div>
                </div>
              </div>
            
      </div>

      </div>
      <br><br><br><br><br><br>



            </div>
            </div>
        </div><!-- Não apagar div do container -->
    </div><!-- Não apagar div do container -->
   

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</div>
</div><!-- Não apagar é do loading -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="../js/main.js"></script>




       


        

</body>

</html>