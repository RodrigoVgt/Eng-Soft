<?php  
    if(isset($_POST['produto'])) {
        echo 'Produto: ', $_POST['produto'], "  ";
    }else echo 'fail';  
    if(isset($_POST['cliente'])) {
        echo 'Cliente: ', $_POST['cliente'], "  ";
    }else echo 'fail';
    if(isset($_POST['quantidade'])) {
        echo 'Quantidade: ', $_POST['quantidade'], "  ";
    }else echo 'fail';
?>