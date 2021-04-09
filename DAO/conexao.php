<?php
define("SERVENAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "dbcursophp");

$conexao = mysqli_connect(SERVENAME,USERNAME,PASSWORD,DATABASE);
mysqli_set_charset($conexao, "utf8");
if (mysqli_connect_error()){
    echo "Erro na conexao: ".mysqli_connect_error();
}
?>