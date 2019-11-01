<?php

if($_POST){
    include 'admin/model/conexao.php';
    include 'admin/model/cliente.class.php';
    include 'admin/dao/cliente.dao.php';

        try{
            $obj = new Cliente();
            $obj->setNome($_POST['nome']);
            $obj->setTelefone($_POST['telefone']);
            $obj->setEmail($_POST['email']);
            $obj->setCpf($_POST['cpf']);
            
            $DAO = new DAOCliente();
            $msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $msg = $e->getMessage();
        }
    }
?>