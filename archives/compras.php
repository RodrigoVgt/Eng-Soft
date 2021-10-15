<?php  

    $conn = mysqli_connect("localhost", "root", "rodrigo", "financas");
                
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
    if(isset($_POST['produto'])) {
        echo 'Produto: ', $_POST['produto'], " <br /> ";
    }else echo 'fail';  
    if(isset($_POST['fornecedor'])) {
        echo 'Fornecedor: ', $_POST['fornecedor'], " <br />";
    }else echo 'fail';
    if(isset($_POST['quantidade'])) {
        echo 'Quantidade: ', $_POST['quantidade'], " <br /> ";
    }else echo 'fail';
    $cliente = $_REQUEST['fornecedor'];
    $produto = $_REQUEST['produto'];
    $quantidade = $_REQUEST['quantidade'];

    $sql = "INSERT INTO financas (acao, produto, quant, cliFor)
            VALUES ('Compra', '$produto', '$quantidade', '$cliente')";

    if(mysqli_query($conn, $sql)){
        header('Location: finanças.php');
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    } 
?>