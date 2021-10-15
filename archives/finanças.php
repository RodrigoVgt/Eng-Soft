<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>preview - trabalho final</title>

     <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
       -webkit-user-select: none;
       -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
       <div>
        <h3 class="float-md-start "><a href="index.html" class="text-white">Bacca's</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="finanças.php">Finanças</a>
            <a class="nav-link" href="compras.html">Compras</a>
            <a class="nav-link" href="vendas.html">Vendas</a>
         </nav>
       </div>
      </header>

      <!--Tabela do Banco-->
      <style>
        table {
            border-collapse: collapse;
            width: 70%;
            color: #04AA6D;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        .table1 {
            border-collapse: collapse;
            width: 70%;
            color: #04AA6D;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2};

        td{
            background-color: white;
        }
        .tabela{
            margin-left: 300px;
        }
    </style>
    <div class = "tabela">
        <table>
            <tr>
             <th>acao</th>
             <th>produto</th>
             <th>quantidade</th>
             <th>Cli/Forn</th>
            </tr>
        </table>
        <?php  

            $conn = mysqli_connect("localhost", "root", "rodrigo", "financas");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT acao, produto, quant, cliFor FROM financas";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                echo "<table class =\"table1\">";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["acao"] . "</td><td>" . $row["produto"] . "</td><td>" . $row["quant"]. "</td><td>" . $row["cliFor"]. "</td></tr>";
                    }
                echo "</table>";
            }else{
                echo " 0 result";
            }

            $conn-> close();
        ?>
    </div>
      <main class>
          <div class = "central">
            <div class="finalizar1">
              <button type="submit" class="btn">Editar</button>
            </div>
            <div class="finalizar2">
              <button type="submit" class="btn">Adicionar</button>
            </div>
            <div class="finalizar3">
              <button type="submit" class="btn">Excluir</button>
            </div>
          </div>
          <div class="finalizar4">
            <button type="submit" onclick="impression()" class="btn">Imprimir</button>
          </div>
          <script>
            function impression(){
            alert("Impressora não conectada!\nImpossível imprimir!!!");
            }
          </script>
      </main>
     <footer class="mt-auto text-white-50">
        <p>Trabalho para a disciplina de Engenharia de Software, pela Universidade Federal da Fronteira Sul</p>
     </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>