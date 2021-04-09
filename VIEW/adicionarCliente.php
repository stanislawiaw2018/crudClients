<?php require_once "../includes/header.php";?>
<div class="row">
    <div class="col s12 m6 push-m3" >
        <h3 class="light">Novo Cliente</h3>
        <form action="../ACTIONS/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="date" name="dataNascimento" id="datnascimento">
                <label for="nome">Data Nascimento</label>
            </div>

            <button type="submit" class="btn" name="btn_cadastrar"> Cadastrar</button>
            <a class="btn green" href="../index.php" > Listar Clientes</a>
        </form>
        
    </div>
</div>

<?php require_once "../includes/footer.php";?>

   