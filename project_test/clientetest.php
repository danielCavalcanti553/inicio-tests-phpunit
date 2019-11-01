<?php
use PHPUnit\Framework\TestCase;
spl_autoload_register(function ($class) {
  require_once(str_replace('\\', '/', 'project/'.$class . '.php'));
});
use Model\Cliente;
use DAO\ClienteDAO;

class DAOClienteTests extends TestCase
{

/**
     * @expectedException Exception
     */
    public function testCadastro()
    {
      
       $c = new Cliente();
       //$c->setId();

       $c->setEmail('danielmail.com');
    

       //$DAO = new ClienteDAO();
       //$msg = $DAO->cadastrar($c);
  
       $this->expectException("Exception");
   
      

    }
}


?>