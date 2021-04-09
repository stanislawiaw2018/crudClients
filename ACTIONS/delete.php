<?php
    
    require_once "../includes/header.php";
   
    require_once "../DAO/conexao.php";

    //$_GET['btn_deletar'])){
       
        $id= mysqli_escape_string($conexao, $_GET['id']);

        $sql = "DELETE FROM tb_clientes WHERE id='$id'";


        if (mysqli_query($conexao, $sql)){
            echo '<script>window.onload = function() {
                swal({
                    title: "Cliente deletado com sucesso!",
                    icon: "success",
                    closeOnEsc: false,
                    closeOnClickOutside: false
                
                }).then(function(){ 
                window.location.href ="../index.php";
                });
                
            }</script>';
        }
        else{
            echo '<script>window.onload = function() {
                swal({
                    title: "Erro ao deletar!",
                    icon: "error",
                    closeOnEsc: false,
                    closeOnClickOutside: false
                
                }).then(function(){
                    window.location.href ="../index.php";
                });
                console.log("erro sql");
            }</script>'; 
        }
    //}
    require_once "../includes/footer.php";
?>