<?php

include_once "model/Request.php";
include_once "model/perfil_usuario.php";
include_once "database/DBConnector.php";

class PerfilUsuarioController
{
    public function register($request)
    {
        $params = $request->get_params();
        $perfil = new perfil_usuario
           ($params["idt_perfil_usuario"],
            $params["nme_perfil"]);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($perfil));
    }

    private function generateInsertQuery($perfil)
    {
        $query = "INSERT INTO perfil_usuario (nme_perfil) VALUES
        ('" . $perfil->getNmePerfil() . "')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT nme_perfil FROM perfil_usuario WHERE " . $crit);

        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    private function generateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value) {
            $criteria = $criteria . $key . " LIKE '%" . $value . "%' OR ";
        }

        return substr($criteria, 0, -4);
    }

    public function update($request)
    {
        $params = $request->get_params();

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        return $conn->query($this->generateUpdateQuery($params));
    }

    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);

        return "UPDATE perfil_usuario SET " . $crit . " WHERE idt_perfil_usuario = '" . $params["idt_perfil_usuario"] . "'";
    }

    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }

        return substr($criteria, 0, -2);
    }
}