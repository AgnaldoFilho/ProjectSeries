<?php

include_once "model/Request.php";
include_once "model/status_episodio_usuario.php";
include_once "database/DBConnector.php";
include_once "ControlConfig.php";

class StatusEpisodioUsuarioController
{

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT nme_status FROM status_episodio_usuario WHERE ".$crit);

        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    private function generateCriteria($params)
    {
        $criteria = "";
        foreach($params as $key => $value)
        {
            $criteria = $criteria.$key." LIKE '%".$value."%' OR ";
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

        return "UPDATE status_episodio_usuario SET " . $crit . " WHERE
            idt_status_episodio_usuario = '" . $params["idt_status_episodio_usuario"] . "'";
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