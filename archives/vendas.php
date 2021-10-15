<?php  
    if(isset($_POST['produto'])) {
        echo 'Produto: ', $_POST['produto'], " <br />";
    }else echo 'fail';  
    if(isset($_POST['cliente'])) {
        echo 'Cliente: ', $_POST['cliente'], " <br />";
    }else echo 'fail';
    if(isset($_POST['quantidade'])) {
        echo 'Quantidade: ', $_POST['quantidade'], " <br /> ";
    }else echo 'fail';
?>