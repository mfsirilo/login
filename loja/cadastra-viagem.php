<?php

$nome_paciente          =    $_POST['nome_p'];
$telefone_paciente      =    $_POST['telefone_p'];
$datan_paciente         =    $_POST['datan_p'];
$rg_paciente            =    $_POST['rg_p'];
$cpf_paciente           =    $_POST['cpf_p'];
$sus_paciente           =    $_POST['sus_p'];
$cep_paciente           =    $_POST['cep_p'];
$rua_paciente           =    $_POST['rua_p'];
$numero_paciente        =    $_POST['numero_p'];
$bairro_paciente        =    $_POST['bairro_p'];
$hospital_paciente      =    $_POST['hospital_p'];
$nome_acompananhte      =    $_POST['nome_a'];
$telefone_acompananhte  =    $_POST['telefone_a'];
$datan_acompananhte     =    $_POST['datan_a'];
$rg_acompananhte        =    $_POST['rg_a'];
$cpf_acompananhte       =    $_POST['cpf_a'];
$sus_acompananhte       =    $_POST['sus_a'];
$casaapoio              =    $_POST['casaapoio'];
$pernoites              =    $_POST['pernoites'];

$servidor   = "localhost";
$usuario    = "root";
$senhadb    = "";
$dbname     = "login";

//$conexao = mysqli_connect($servidor, $usuario, $senhadb, $dbname);
$conexao = new mysqli($servidor,$usuario,$senhadb,$dbname);

$result_usuario = "INSERT INTO `susviagem` (`idsusviagem`, `nome_p`, `telefone_p`, `datan_p`, `rg_p`, `cpf_p`, 
`sus_p`, `cep_p`, `rua_p`, `numero_p`, `bairro_p`, `hospital_p`, `nome_a`, `telefone_a`, `datan_a`, `rg_a`, `cpf_a`, 
`sus_a`, `casaapoio`, `pernoites`) VALUES (NULL,'".$nome_paciente."','".$telefone_paciente."','".$datan_paciente."',
'".$rg_paciente."','".$cpf_paciente."','".$sus_paciente."','".$cep_paciente."','".$rua_paciente."','".$numero_paciente."',
'".$bairro_paciente."',
'".$hospital_paciente."','".$nome_acompananhte."','".$telefone_acompananhte."','".$datan_acompananhte."',
'".$rg_acompananhte."','".$cpf_acompananhte."','".$sus_acompananhte."','".$casaapoio."','".$pernoites."')";

//$inserir = mysqli_query($conexao, $result_usuario);
$conexao->query($result_usuario);
$conexao->close();
/*
if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    sleep(10);
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    sleep(10);
}
*/
?>