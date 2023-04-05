<?php

    //IMPORT DA CLASSE USUÁRIO

    require_once('../model/Usuario.php');

    //INSTANCIANDO OBEJTO

    $usuario = new Usuario($_GET['txtNome'], $_GET['txtCpf'], $_GET['txtRendimento']);

    //ENVIANDO CABEÇALHO

    header("Location: ../view/aliquota.php?".
        "txtNome=".$usuario->getNome().
        "&txtCpf=".$usuario->getCpf().
        "&txtRendimento=".$usuario->getRendimento().
        "&txtAliquota=".$usuario->getAliquota().
        "&txtImposto=".$usuario->getImposto()
    );
?>