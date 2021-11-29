<?php

include('conexao.php');

$sql = "select * from tbldocente";
$resultado = $con->query($sql);


    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        echo $linha['iddocente']."<br>";
        echo $linha['docente']."<br>";
        echo $linha['especialidade']."<br>";
        echo $linha['salhora']."<br>";
        echo $linha['disponibilidade']."<br>";
        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";
    }