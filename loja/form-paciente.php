</br>

<form action="cadastra-viagem.php"  method="POST">
  <div class="card card-body" >
    <h4>Informe os dados paciente:</h4></br>

    <div class="form-row align-items-center">
      <div class="col-md-4 mb-3">
        <label for="nome_p">Nome Completo</label>
        <input name="nome_p" type="text" class="form-control" id="nome_p" placeholder="Nome completo do paciente" >
      </div>
      <div class="col-md-4 mb-3">
        <label for="telefone_p">Telefone</label>
        <input name="telefone_p" type="text" class="form-control" id="telefone_p" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" placeholder="Telefone" >
      </div>
        <div class="col-md-4 mb-3"> 
          <label for="datan_p">Data Nascimento</label>
          <input name="datan_p"type="text" class="form-control" id="datan_p" aria-describedby="inputGroupPrepend3" >
        </div>
    </div>
    
    <div class="form-row align-items-center">
      <div class="col-md-4 mb-3">
        <label for="rg_p">RG:</label>
        <input name="rg_p"type="text" class="form-control" id="rg_p" placeholder="RG" >
      </div>
      <div class="col-md-4 mb-3">
        <label for="cpf_p">CPF</label>
        <input name="cpf_p" type="text" class="form-control" id="cpf_p" placeholder="CPF" >
      </div>
      <div class="col-md-4 mb-3">
        <label for="sus_p">Cartão SUS</label>
          <input name="sus_p" type="text" class="form-control" id="sus_p"placeholder="N° cartão SUS" >
        </div>
    </div>
    
    <div class="form-row align-items-center">
      <div class="col-md-3 mb-3">
        <label for="cep_p">CEP:</label>
        <a href="http://www.buscacep.correios.com.br/servicos/dnec/index.do" target="_blank"><img width="25%" src="image/busca-correio.png" alt="Busca Cep Correios"></a>
        <input name="cep_p" type="text" id="cep_p" value="" class="form-control" size="10" placeholder="CEP" maxlength="9" onblur="pesquisacep(this.value);"  >
      </div>
      <div class="col-md-3 mb-3">
        <label for="rua">Rua:</label>
        <input name="rua_p" size="10" maxlength="9" ="text" class="form-control" id="rua" placeholder="RUA"  >
      </div>
      <div class="col-md-2 mb-3">
        <label for="numero">N°</label>
        <input name="numero_p" type="text" size="10" class="form-control" id="numero" placeholder="Número">
      </div>
      <div class="col-md-4 mb-3">
        <label for="bairro">Bairro:</label>
        <input name="bairro_p" type="text" size="50" class="form-control" id="bairro" placeholder="Bairro"  >
      </div>
  <!--
        <div class="col-md-2 mb-3">
          <label for="cidade">Cidade:</label>
          <input type="text" name="rua" size="10" class="form-control" id="cidade" placeholder="Cidade"  >
        </div>
        <div class="col-md-1 mb-3">
          <label for="uf">UF:</label>
          <input type="text" name="uf" size="10" class="form-control" id="uf" placeholder="UF"  >
        </div>
        <div class="col-md-4 mb-3">
        </div>
      -->
    </div>
    <label align="left" for="validationServer01">Hospital</label>
    <input name="hospital_p"type="text" class="form-control" id="hospital" placeholder="Hospital" >
  </div>
  </br>

    &emsp;
      <div class="form-row align-items-center">
        <div >
          <p>
            <a class="btn btn-light" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Adicionar acompanhante</a>&emsp;
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Informar casa de apoio</button>&emsp;
            <!-- <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Acompanhante + <br/>casa de apoio</button> -->
          </p>
        </div>
      </div>
    <!--  
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" >
        <label class="form-check-label" for="invalidCheck3">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    -->
    
    <!-- Inicio do Dropdown -->
    <div>
      <div class="row">
        <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
            <h4>Informe os dados do acompanhante:</h4></br>
            <?php include("form-acompanhante.php") ?>
          </div>
        </div>
      </div>
    </div></br>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body">
            <h4>Informe os dados da casa de apoio:</h4>
            <?php include("fom-casaapoio.php") ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim do Dropdown -->

  <!-- Inicio do botão de conclusão -->
  <div class="card card-body">
    <!-- Button trigger modal -->
    <button name"acao" value"inserir" class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar viagem</button>
    <br/>
    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
      Limpar formulario
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Tem certeza que deseja limpar as informações do formulário?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>
            <button href="login/index.php" type="button" class="btn btn-danger" data-dismiss="modal">Sim</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>  
</form>
