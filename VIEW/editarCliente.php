<?php
    require_once "../includes/header.php";
    require_once "../DAO/conexao.php";
    if (isset($_GET['id'])){
        $id = mysqli_escape_string($conexao,$_GET['id']);
        $sql = "SELECT * FROM tb_clientes WHERE id='$id'";
        $resultado = mysqli_query($conexao,$sql);
        $dados = mysqli_fetch_array($resultado);
    }
?>
<div class="row">
    <div class="col s12 m6 push-m3" >
        <h3 class="light">Editar Cliente</h3>
        <form action="../ACTIONS/update.php" method="post">
            <input hidden name="id" value="<?php echo $dados['id']?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="date" name="dataNascimento" id="datanascimento" value="<?php echo $dados['dataNasc']; ?>">
                <label for="datanascimento">Data Nascimento</label>
            </div>

            <button type="submit" class="btn" name="btn_editar"> Atualizar</button>
            <a class="btn green" href="../index.php" > Listar Clientes</a>
        </form>
        
    </div>
</div>

<?php require_once "../includes/footer.php";?>
