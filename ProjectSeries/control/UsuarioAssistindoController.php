<?php

include_once "model/Request.php";
include_once "model/usuario_assistindo.php";
include_once "database/DBConnector.php";

class UsuarioAssistindoController
{
    public function register($request)
    {
        $params = $request->get_params();
        $user = new usuario_assistindo
           ($params["idt_usuario_assistindo"],
            $params["cod_usuario"],
            $params["cod_serie"],
            $params["cod_temporada"],
            $params["cod_episodio"]);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($user));
    }

    private function generateInsertQuery($user)
    {
        $query =  "INSERT INTO usuario_assistindo (cod_usuario, cod_serie, cod_temporada, cod_episodio) VALUES ('".$user->getCodUsuario()."','".
            $user->getCodSerie()."','".
            $user->getCodTemporada()."','".
            $user->getCodEpisodio()."')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT s.name_series, s.synopsis, ua.cod_usuario, u.first_name, t.num_temporada, ep.num_episodio FROM usuario_assistindo AS ua, usuario AS u, series AS s, temporada AS t, episodio AS ep WHERE ua.cod_usuario = u.idt_usuario AND ua.cod_serie = s.idt_serie AND ua.cod_temporada = t.idt_temporada AND ua.cod_episodio = ep.idt_episodio AND ".$crit);
        //$result = $conn->query("SELECT * FROM usuario_assistindo WHERE 1=1 AND ".$crit);


        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    private function generateCriteria($params)
    {
        $criteria = "";
        foreach($params as $key => $value)
        {
            $criteria = $criteria.$key."  = '".$value."' OR ";
        }

        return substr($criteria, 0, -4);
    }

    /*public function update($request)
    {
        $params = $request->get_params();

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        return $conn->query($this->generateUpdateQuery($params));
    }

    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);

        return "UPDATE usuario_assistindo SET " . $crit . " WHERE idt_usuario_assistindo = '" . $params["idt_usuario_assistindo"] . "'";
    }

    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }

        return substr($criteria, 0, -2);
    }*/

    private function isValid($parameters)
    {
        $keys = array_keys($parameters);
        $diff1 = array_diff($keys, $this->requiredParameters);
        $diff2 = array_diff($this->requiredParameters, $keys);
        if (empty($diff2) && empty($diff1))
            return false;
    }
}