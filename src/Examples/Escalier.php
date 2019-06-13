<?php


namespace src\Examples;


class Escalier
{
    private $nombreMarche = 0;

    public function retourneMessage()
    {
        $message = "Message";

        return $message;
    }

    public function forwardMessage()
    {
        $message2 = $this->retourneMessage();

        echo $message2;
    }

    public function monteMarche()
    {
        $this->nombreMarche += 1;
    }

}

$escalier = new Escalier();
$message3 = $escalier->retourneMessage();
echo $message3;