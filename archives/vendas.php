<?php  

    $conn = mysqli_connect("localhost", "root", "rodrigo", "financas");
            
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
    $cliente = $_REQUEST['cliente'];
    $produto = $_REQUEST['produto'];
    $quantidade = $_REQUEST['quantidade'];

    $sql = "INSERT INTO financas (acao, produto, quant, cliFor)
            VALUES ('Venda', '$produto', '$quantidade', '$cliente')";

    if(mysqli_query($conn, $sql)){
        header('Location: finanças.php');
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
?>