<?php

include_once "model/Request.php";
include_once "model/episodio.php";
include_once "database/DBConnector.php";

class EpisodioController
{

    public function search($request)
    {
	$params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT e.idt_episodio, e.cod_temporada, s.name_series, t.num_temporada, e.num_episodio FROM episodio AS e, series AS s, temporada AS t WHERE s.idt_serie = t.cod_serie AND t.idt_temporada = e.cod_temporada AND ".$crit);
		 // $result = $conn->query("SELECT * FROM episodio WHERE 1=1 and ".$crit);]

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

        return "UPDATE episodio SET " . $crit . " WHERE idt_episodio = '" . $params["idt_episodio"] . "'";
    }

    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }

        return substr($criteria, 0, -4);
    }
}