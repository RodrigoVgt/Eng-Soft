<?php  
    if(isset($_POST['produto'])) {
        echo 'Produto: ', $_POST['produto'], "  ";
    }else echo 'fail';  
    if(isset($_POST['fornecedor'])) {
        echo 'Fornecedor: ', $_POST['fornecedor'], "  ";
    }else echo 'fail';
    if(isset($_POST['quantidade'])) {
        echo 'quantidade: ', $_POST['quantidade'], "  ";
    }else echo 'fail';
?>