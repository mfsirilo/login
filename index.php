<?php include("navbarlogin.php");
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TDF</title>

    <!-- Bootstrap core CSS -->
    <link href="loja/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="signin.css" rel="stylesheet"> 
</head>
<body>
    <br/><br/>
    <div class="card card-body container col-md-5 form-inline">
        <img  src="/login/img/brazao.png"class="md-9" >
        <br/><br/>
        <h3 class="h3 mb-3 font-weight-normal">TDF - Rio Verde - Goiás</h3>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
                ?>
                    <div class="alert alert-danger">
                        <p>Usuário ou senha inválidos.</p>
                    </div>
                        <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="">
                    <form class"form-singin" action="login.php" method="POST">
                        <div class="field col-md-9">
                            <div class="form-singin configdiv">
                                <input name="usuario" name="text" class="form-control" placeholder="Seu usuário" autofocus="">
                            </div>
                        </div>
                        <br/>
                        <div class="field col-md-9">
                            <div class="form-singin">
                                <input name="senha" class="form-control" type="password" placeholder="Sua senha">
                            </div>
                        </div>
                        <br/>
                        <div class="form-singin">
                            <button type="submit" class="btn btn-lg btn-primary btn-block ">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </body>
        <?php include("rodape.php")?>
        </html>