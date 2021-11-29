<?php

include('conexao.php');

$sql = "select * from tblaluno";
$resultado = $con->query($sql);


$resultado = $con->query($sql);
// if($resultado->num_rows>0){
    // listar os resultados achados
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        echo $linha['idaluno']."<br>";
        echo $linha['aluno']."<br>";
        echo $linha['turma']."<br>";
        echo $linha['mensal']."<br>";
        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";
    }
// }else{
//     echo "nenhum registro encontrado";
// }

// var_dump($resultado);


/* 

<?php



include('conexao.php');



$sql = "select * from tblaluno";



$resultado = $con->query($sql);



    //listar os resultados achados



    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){



       // var_dump($linha);



        echo "Nº de Registro: ". $linha['idaluno']."<br>";

        echo "Nome do Aluno: ". $linha['aluno']."<br>";

        echo "Turma: ". $linha['turma']."<br>";

        echo "Mensalidade: {$linha['mensal']}<br>";



        echo "<button>Editar</button> | <button>Apagar</button>";

        echo "<hr>";

    }









*/