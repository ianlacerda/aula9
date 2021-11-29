<?php

//include avisa o erro e continua funcionando
//include_once o erro e continua funcionando, usa o arquivo uma única vez
//require avisa o erro e para o funcionamento do programa
//require_once o erro e para o funcionamento do programa, usa o arquivo uma única vez

include('conexao.php');


$iddocente = 1;
$sql = "delete from tbldocente where iddocente='$iddocente'";

//conexao->query(comando sql)        
$con->query($sql);

var_dump($con);