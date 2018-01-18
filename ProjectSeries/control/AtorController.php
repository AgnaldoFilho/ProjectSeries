<?php

include_once "model/Request.php";
include_once "model/ator.php";
include_once "database/DBConnector.php";

class AtorController
{
    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT a.nme_ator, s.name_series FROM ator AS a, ator_temporada AS atemp, series AS s, temporada AS t WHERE
        atemp.cod_ator = a.idt_ator AND atemp.cod_temporada = t.idt_temporada AND t.cod_serie = s.idt_serie AND ".$crit);

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
}