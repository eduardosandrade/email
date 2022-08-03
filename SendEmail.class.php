<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';


class SendEmail extends PHPMailer {

public $assunto;
public $nome;
public $destinatario;
public $conteudo;

    public function __construct($assunto, $nome, $destinatario, $conteudo){
        $this->assunto = $assunto;
        $this->nome = $nome;
        $this->destinatario = $destinatario;
        $this->conteudo = utf8_decode($conteudo);
    }

    public function enviar(){
        
        $this->isSMTP();
        $this->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->Host = 'smtp.gmail.com';
        $this->Port = 465;
        $this->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->SMTPAuth = true;
        $this->Username = 'eduardo.mesquitacontabil@gmail.com';
        $this->Password = 'sqmtgiuusfjgjwey';
        $this->setFrom('eduardo.mesquitacontabil@gmail.com', 'Eduardo');
        $this->addAddress($this->destinatario, $this->nome);
        $this->Subject = $this->assunto;
        //$this->msgHTML(file_get_contents('contents.html'), __DIR__);
        $this->setLE("<br>");

        $this->msgHTML($this->stripTrailingWSP($this->conteudo));
        //$this->AltBody = 'This is a plain-text message body';

        if (!$this->send()) {
            echo 'Mailer Error: ' . $this->ErrorInfo;
        } else {
            echo 'Message sent!';
        }
    }




}

