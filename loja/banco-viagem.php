<?php
/*
function listaViagem($conexao) {
    $Viagems = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from Viagems as p join categorias as c on p.categoria_id = c.id");

    while($Viagem = mysqli_fetch_assoc($resultado)) {
        array_push($Viagems, $Viagem);
    }

    return $Viagems;
}
*/
function insereViagem($nome_paciente,$telefone_paciente,$datan_paciente,$rg_paciente,$cpf_paciente,$sus_paciente,$cep_paciente,$rua_paciente,$numero_paciente,
                    $bairro_paciente,$hospital_paciente,$nome_acompananhte,$telefone_acompananhte,$datan_acompananhte,$rg_acompananhte,$cpf_acompananhte,$sus_acompananhte,$casaapoio,$pernoites) {
    $query = "INSERT INTO susviagem (idsusviagem, nome_p, telefone_p, datan_p, rg_p, cpf_p, sus_p, cep_p, rua_p, numero_p,bairro_p, hospital_p,nome_a,telefone_a, datan_a, rg_a, cpf_a, sus_a, casaapoio, pernoites) VALUES ('$nome_paciente','$telefone_paciente','$datan_paciente','$rg_paciente','$cpf_paciente','$sus_paciente','$cep_paciente','$rua_paciente','$numero_paciente','$bairro_paciente','$hospital_paciente','$nome_acompananhte','$telefone_acompananhte','$datan_acompananhte','$rg_acompananhte','$cpf_acompananhte','$sus_acompananhte','$casaapoio','$pernoites')";
    return mysqli_query($conexao, $query);
}
/*
function alteraViagem($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "update Viagems set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}',
        categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeViagem($conexao, $id) {
    $query = "delete from Viagems where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaViagem($conexao, $id) {
    $query = "select * from Viagems where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
*/
