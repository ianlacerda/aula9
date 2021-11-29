<?php

//include avisa o erro e continua funcionando
//include_once o erro e continua funcionando, usa o arquivo uma única vez
//require avisa o erro e para o funcionamento do programa
//require_once o erro e para o funcionamento do programa, usa o arquivo uma única vez

include('conexao.php');


$iddocente=4;
$docente ="Juan";
$especialidade="PHP";
$salhora = 200.2;
$disponibilidade="diurno";

$sql = "insert into tbldocente (iddocente,docente,especialidade,salhora,disponibilidade)
        values('$iddocente','$docente','$especialidade','$salhora','$disponibilidade')";

//conexao->query(comando sql)        
$con->query($sql);

// var_dump($con);