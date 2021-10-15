<?php  

    $conn = mysqli_connect("localhost", "root", "rodrigo", "financas");
            
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }else{
        echo 'Connections sucessful <br />';
    }

    if(isset($_POST['produto'])) {
        echo 'Produto: ', $_POST['produto'], " <br />";
    }else echo 'fail';  
    if(isset($_POST['cliente'])) {
        echo 'Cliente: ', $_POST['cliente'], " <br />";
    }else echo 'fail';
    if(isset($_POST['quantidade'])) {
        echo 'Quantidade: ', $_POST['quantidade'], " <br /> ";
    }else echo 'fail';

    $cliente = $_REQUEST['cliente'];
    $produto = $_REQUEST['produto'];
    $quantidade = $_REQUEST['quantidade'];

    $sql = "INSERT INTO financas (acao, produto, quant, cliFor)
            VALUES ('Venda', '$produto', '$quantidade', '$cliente')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
?>