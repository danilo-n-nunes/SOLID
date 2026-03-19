<?php

namespace src;

class Email implements IMensagemToken
{
    public function enviar($token):void
    {
        // Lógica para enviar o token
        echo "Email: Seu token é: $token";

    }

}