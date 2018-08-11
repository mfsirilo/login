<?php
if(!$_SESSION['usuario']) {
	header('Location: /login/index.php');
	exit();
}?>

<div class="form-row align-items-center">
    <div class="col-md-4 mb-3">
      <label for="nome_a">Nome acompanhante</label>
      <input name="nome_a" type="text" class="form-control" id="nome_a" placeholder="Nome completo">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Telefone</label>
      <input name="telefone_a" type="number" class="form-control" id="validationServer02" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" placeholder="Telefone">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Data Nascimento</label>
        <input name="datan_a" type="date" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3">
      </div>
    </div>
  <div class="form-row align-items-center">
    <div class="col-md-4 mb-3">
      <label for="rg">RG:</label>
      <input name="rg_a" type="text" class="form-control" id="rg" placeholder="RG">
    </div>
    <div class="col-md-4 mb-3">
      <label for="cpf">CPF</label>
      <input name="cpf_a" type="text" class="form-control" id="cpf" data-mask-selectonfocus="true">
    </div>
    <div class="col-md-4 mb-3">
      <label for="sus">Cartão SUS</label>
        <input name="sus_a" type="text" class="form-control" id="sus" data-mask-selectonfocus"true">
      </div>
  </div>
</div>