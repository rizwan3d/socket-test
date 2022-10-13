<?php
namespace App\Framework\Socket;

use App\Framework\Config\_Global;
use App\Framework\Socket\SocketFactory;


final class SocketProvider{

    private $factory;

    private $socket;

    public function __construct(){

        $this->factory = new SocketFactory();
        $this->socket = $this->factory->createServer('tcp://localhost:1337');
        echo 'Connected to ' . $this->socket->getPeerName() . PHP_EOL;

    }


    public function start(){
        do{
            $data = $this->socket->read(8192);
            echo $data . "\n\n";
        } while(true);
    }
}