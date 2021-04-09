<?php
//HEADER 
require_once "includes/header.php";
//CONEXAO
require_once "DAO/conexao.php";
?>
<div class="row">
    <div class="col s12 m6 push-m3" >
        <h3 class="light">Clientes</h3>
        <table class=striped>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                  $sql = "SELECT * FROM tb_clientes";
                  $resultado = mysqli_query($conexao, $sql);
                  if (mysqli_num_rows($resultado)>0){
                    while ($dados = mysqli_fetch_array($resultado)){
                ?>
                    <tr>
                        <td><?php echo $dados['nome'];?></td>
                        <td><?php echo $dados['sobrenome'];?></td>
                        <td><?php echo $dados['email'];?></td>
                        <td><?php echo $dados['dataNasc'];?></td>
                        <td><a href="VIEW/editarCliente.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                        
                        <td><a href="javascript:confirmExcluir(<?php echo $dados['id']; ?>)"  class="btn-floating red"><i class="material-icons">delete</i></a></td>

                    </tr>
                <?php } 
                  }else{ 
                      echo
                      '<script>
                            window.onload = function() {
                                swal({
                                    title: "Não há nenhum Cliente Cadastrado!",
                                    icon: "warning",
                                    closeOnEsc: false,
                                    closeOnClickOutside: false
                                
                                });
                            }
                    </script>';
                 ?>
                  <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        

                    </tr>   
                 <?php } ?>

                
            </tbody>
            
        </table>
        <br>
            <a href="VIEW/adicionarCliente.php" class="btn">Adicionar Cliente</a>
        <br>
    </div>
    
</div>

<?php require_once "includes/footer.php";?>

   