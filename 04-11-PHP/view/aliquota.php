<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Kauan Gabriel">
    <link rel="stylesheet" type="text/css" href="assents/css/style.css">
    <script src="https://kit.fontawesome.com/ee65ffa8a8.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assents/js/mascara-cpf.js"></script>
   
    <title>03-13</title>
</head>
<body>
    <div class="container">
        

        <form name="frmcreate" method="POST" action="index.php">

            <h1>Imposto de Renda </h1>
            
            <label class="label-input" for="">
                <i class="far fa-user icon-modify"></i>
                <input class="input" name="txtNome" id="txtNome" type="text" readonly
                value="<?php echo($_GET['txtNome']);?>">
            </label>

            <label class="label-input" for="">
                <i class="fas fa-id-card icon-modify"></i>
                <input class="input" name="txtCpf" id="txtCpf" type="text" readonly maxlength="14" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()'
                value="<?php echo($_GET['txtCpf']);?>">
            </label>

            <label class="label-input" for="">
                <i class="fa-sharp fa-solid fa-money-check-dollar icon-modify"></i>
                <input class="input" name="txtRendimento" id="txtRendimento" type="text" readonly
                value="<?php echo($_GET['txtRendimento']);?>">
            </label>

            <label class="label-input" for="">
                <i class="fa-solid fa-percent icon-modify"></i>
                <input class="input" name="txtAliquota" id="txtAliquota" type="text" readonly
                value="<?php echo($_GET['txtAliquota']);?>">
            </label>

            <label class="label-input" for="">
                <i class="fa-sharp fa-solid fa-money-check-dollar icon-modify"></i>
                <input class="input" name="txtImposto" id="txtImposto" type="text" readonly
                value="<?php echo($_GET['txtImposto']);?>">
            </label>

            <center>
                <input class="btn2" type="submit" name="botaozin" value="Calcular novo Usuario" readonly>
            </center>

        </form>
    </div>

</body>
</html>