<?php

$servidor   = "localhost";
$usuario    = "syssus";
$senhadb    = "rootsql";
$dbname     = "login";


$conexao = mysqli_connect($servidor, $usuario, $senhadb, $dbname);

if(mysqli_connect_errno()){
    die("Houve o seguinte erro: ".mysqli_connect_errno());
}

/*
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


if(isset($_POST['acao'])){

	if($_POST['acao'] == 'inserir'){
		inserirRegistro();
	}

	if($_POST['acao'] == 'alterar'){
		alterarRegistro();
	}

	if($_POST['acao'] == 'excluir'){
		excluirRegistro();
	}

}


function abrirBanco(){
	$conexao = mysqli_connect($servidor, $usuario, $senhadb, $dbname);
	return $conexao;
}

function inserirRegistro(){
	$banco = abrirBanco();
	$sql = "INSERT INTO susviagem (nome_p, telefone_p, datan_p, rg_p, cpf_p, sus_p, cep_p, rua_p, numero_p,bairro_p, hospital_p,nome_a,telefone_a, datan_a, rg_a, cpf_a, sus_a, casaapoio, pernoites) VALUES ('{$_POST["nome_p"]}','{$_POST["telefone_p"]}')";
	//$sql = "INSERT INTO registros (nome, email, nascimento, endereco, telefone) VALUES ('{$_POST["nome"]}', '{$_POST["email"]}', '{$_POST["nascimento"]}', '{$_POST["endereco"]}', '{$_POST["telefone"]}')";
	$banco->query($sql);
	$banco->close();
	voltarInicio();
}

function alterarRegistro(){
	$banco = abrirBanco();
	$sql = "UPDATE registros SET nome='{$_POST["nome"]}', email='{$_POST["email"]}', nascimento='{$_POST["nascimento"]}', endereco='{$_POST["endereco"]}', telefone='{$_POST["telefone"]}' WHERE id='{$_POST["id"]}'";
	$banco->query($sql);
	$banco->close();
	voltarInicio();
}

function excluirRegistro(){
	$banco = abrirBanco();
	$sql = "DELETE FROM registros WHERE id='{$_POST["id"]}'";
	$banco->query($sql);
	$banco->close();
	voltarInicio();
}

function selectAllRegistros(){
	$banco = abrirBanco();
	$sql = "SELECT * FROM registros ORDER BY nome";
	$result = $banco->query($sql);
	$banco->close();
	while($row = mysqli_fetch_array($result)){
		$registros[] = $row;
	}
	return $registros;
}

function selectIDRegistro($id){
	$banco = abrirBanco();
	$sql = "SELECT * FROM registros WHERE id=".$id;
	$result = $banco->query($sql);
	$banco->close();
	$registro = $row = mysqli_fetch_assoc($result);
	return $registro;
}

function formatarData($data){
	$array = explode("-", $data);
	$novaData = $array[2]."/".$array[1]."/".$array[0];
	return $novaData;
}

function voltarInicio(){
	header("Location: pagina-inicial.php");
}

?>