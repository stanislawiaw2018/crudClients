<?php
    require_once "../includes/header.php";
    
    require_once "../DAO/conexao.php";
    

    if(isset($_POST['btn_cadastrar'])){
        $nome= mysqli_escape_string($conexao, $_POST['nome']);
        $sobrenome= mysqli_escape_string($conexao, $_POST['sobrenome']);
        $email= mysqli_escape_string($conexao, $_POST['email']);
        $dataNasc= mysqli_escape_string($conexao, $_POST['dataNascimento']);

        $sql = "INSERT INTO tb_clientes (nome, sobrenome, email, dataNasc) VALUES ('$nome', '$sobrenome',
        '$email','$dataNasc')";


        if (mysqli_query($conexao, $sql)){
            echo '<script>window.onload = function() {
                swal({
                    title: "Cadastro Realizado com sucesso!",
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
                    title: "Cadastro não foi realizado com sucesso!",
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