<?php

include_once "model/Request.php";
include_once "model/escritor.php";
include_once "database/DBConnector.php";

class EscritorController
{
    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT esc.nme_escritor, s.name_series  FROM escritor AS esc, series AS s WHERE esc.cod_serie = s.idt_serie AND " . $crit);

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
}