<?php

include_once "model/Request.php";
include_once "model/series_categoria.php";
include_once "database/DBConnector.php";

class SeriesCategoriaController
{

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT DISTINCT s.img_poster FROM series_categoria AS sc, series AS s, categoria AS c WHERE sc.cod_serie = s.idt_serie AND sc.cod_categoria = c.idt_categoria AND " . $crit);

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