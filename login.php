<?php
    require 'config.php';
    
    $login = retornadados('login');
    
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISCOS - SISTEMA PARA CONTROLE DE ORDEM DE SERVIÇO</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">




    </head>
    <body>

        <div class="container">   
            <h1>Controle de Ordem de Serviços</h1>
            
            <?php exibe_msg() ?>

            <form method="POST" action="login_acao.php">
                <legend><i class="glyphicon glyphicon-log-in"></i>  Área Administrativa</legend>
                
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" class="form-control" value='<?=$login?>'>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" value=''>
                </div>
                                   
                    
                <div>
                    <button name="Entrar" class="btn btn-primary">Entrar</button>
                </div>
            </form>


        </div>


        
    </body>
</html>
