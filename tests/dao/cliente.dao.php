<?php
use PHPUnit\Framework\TestCase;

include "src/admin/dao/cliente.dao.php";
include "src/admin/model/cliente.class.php";
include "src/admin/model/conexao.php";


class DAOClienteTests extends TestCase
{
    public function testCadastro()
    {
       $c = new Cliente();
       //$c->setId();
       $c->setNome('Daniel');
       $c->setTelefone('(21)1231-2132');
       $c->setEmail('daniel@email.com');
       $c->setCpf('123.456.789-10');

       $DAO = new DAOCliente();
       $msg = $DAO->cadastrar($c);

      $this->assertEquals($msg, "Cadastrado com sucesso");
      $this->assertFalse(false, false);
       

    }
}


?>