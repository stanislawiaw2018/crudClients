<?php
    require_once "../includes/header.php";
    
    require_once "../DAO/conexao.php";
    

    if(isset($_POST['btn_editar'])){
        $nome= mysqli_escape_string($conexao, $_POST['nome']);
        $sobrenome= mysqli_escape_string($conexao, $_POST['sobrenome']);
        $email= mysqli_escape_string($conexao, $_POST['email']);
        $dataNasc= mysqli_escape_string($conexao, $_POST['dataNascimento']);
        $id= mysqli_escape_string($conexao, $_POST['id']);

        $sql = "UPDATE tb_clientes SET nome='$nome', sobrenome='$sobrenome', 
        email='$email', dataNasc='$dataNasc' WHERE id='$id'";


        if (mysqli_query($conexao, $sql)){
            echo '<script>window.onload = function() {
                swal({
                    title: "Atualizado com sucesso!",
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
                    title: "Erro ao atualizar!",
                    icon: "error",
                    closeOnEsc: false,
                    closeOnClickOutside: false
                
                }).then(function(){
                    window.location.href ="../index.php";
                });
                console.log("erro sql");
            }</script>'; 
        }
    }
    require_once "../includes/footer.php";
?>
