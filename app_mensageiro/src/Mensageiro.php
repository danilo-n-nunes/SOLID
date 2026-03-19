<?php 

namespace src;

use src\Email;
use src\IMensagemToken; 

class Mensageiro
{

    private $canal;

    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }

    public function getCanal() : IMensagemToken
    {
        return $this->canal;
    }

    public function setCanal( IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken():void
    {
        $this->getCanal()->enviar(rand(1000, 9999));
        // $classe = 'src\\' . ucfirst($this->getCanal());
        // echo $classe;
        // echo "<br>";
        // if (class_exists($classe)) {
        //     $obj = new $classe();
        //     $obj->enviar(rand(1000, 9999));
        // } else {
        //     echo "Canal de comunicação não encontrado.";
        // }

    }

}