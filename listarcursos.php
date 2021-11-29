<?php

include('conexao.php');

$sql = "select * from tblcursos";
$resultado = $con->query($sql);


    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        echo $linha['idcurso']."<br>";
        echo $linha['curso']."<br>";
        echo $linha['valor']."<br>";
        echo $linha['ch']."<br>";
        echo $linha['docente']."<br>";
        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";
    }