<?php

include_once "model/Request.php";
include_once "model/usuario.php";
include_once "database/DBConnector.php";

class UsuarioController
{
    public function register($request)
    {
        $params = $request->get_params();
        $user = new usuario
           ($params["idt_usuario"],
            $params["first_name"],
            $params["last_name"],
            $params["email"],
            $params["birthdate"],
            $params["senha"],
            $params["cod_perfil"]);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($user));
    }

    private function generateInsertQuery($user)
    {
        $query =  "INSERT INTO usuario (first_name, last_name, email, birthdate, senha, cod_perfil) VALUES ('".$user->getFirstName()."','".
            $user->getLastName()."','".
            $user->getEmail()."','".
            $user->getBirthDate()."','".
            $user->getSenha()."','".
            $user->getCodPerfil()."')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT * FROM usuario WHERE 1=1 AND ".$crit);

        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    private function generateCriteria($params)
    {
        $criteria = "";
        foreach($params as $key => $value)
        {
            $criteria = $criteria.$key." LIKE '%".$value."%' AND ";
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

        return "UPDATE usuario SET " . $crit . " WHERE idt_usuario = '" . $params["idt_usuario"] . "'";
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

    public function remove($request)
    {
        $params = $request->get_params();

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->prepare("DELETE FROM usuario WHERE email = ?");

        $result->bindParam(1, $params['email']);

        $result->execute();

        return $result;
    }

    private function isValid($parameters)
    {
        $keys = array_keys($parameters);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);
        if (empty($diff2) && empty($diff1))
            return false;
    }
}