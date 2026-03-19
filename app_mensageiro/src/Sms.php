<?php

namespace src;

class Sms implements IMensagemToken
{
    public function enviar($token):void
    {
        // Lógica para enviar o token
        echo "SMS: Seu token é: $token";

    }

}