    <?php
$SERVER = "localhost";
$usuario = "root";
$senha = "";
$bancoDeDados = "noite";
$acesso = new mysqli($SERVER, $usuario, $senha, $bancoDeDados);
    if($acesso -> connect_error){
        die( "Erro de conexão" . $acesso ->connect_error);
    }

  ?>
