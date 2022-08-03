<?php

require_once "SendEmail.class.php";

$nome = $_REQUEST['nome'];
$assunto = $_REQUEST['assunto'];
$destinatario = $_REQUEST['from'];
$conteudo = $_REQUEST['conteudo'];


$email = new sendEmail($assunto,$nome,$destinatario,$conteudo);
$email->enviar();


