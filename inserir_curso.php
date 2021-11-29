<?php

//include avisa o erro e continua funcionando
//include_once o erro e continua funcionando, usa o arquivo uma única vez
//require avisa o erro e para o funcionamento do programa
//require_once o erro e para o funcionamento do programa, usa o arquivo uma única vez

include('conexao.php');


$idcurso =17995;
$curso ="Java";
$valor=1000.50;
$ch = 10;
$docente="Igor Ribeiro";

$sql = "insert into tblcursos (idcurso,curso,valor,ch,docente)
        values('$idcurso','$curso','$valor','$ch','$docente')";

//conexao->query(comando sql)        
$con->query($sql);

var_dump($con);