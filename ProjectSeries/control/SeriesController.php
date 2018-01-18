<?php

include_once "model/Request.php";
include_once "model/series.php";
include_once "database/DBConnector.php";
include_once "ControlConfig.php";

class SeriesController
{

    public function search($request)
    {

        $params = $request->get_params();

        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        /*$result1 = $conn->prepare("SELECT s.cod_categoria, s.name_series, s.initials, s.year_series, s.synopsis,
        s.link_trailer, a.nme_ator, d.nme_diretor FROM
        series AS s, ator AS a, temporada AS t, ator_temporada AS atemp, episodio AS ep, diretor AS d
		WHERE ep.cod_diretor = d.idt_diretor AND ep.cod_temporada = t.idt_temporada AND
		atemp.cod_ator = a.idt_ator AND atemp.cod_temporada = t.idt_temporada AND t.cod_serie = s.idt_serie AND ".$crit);
        $result1->execute();*/


        $result1 = $conn->prepare("SELECT * FROM series WHERE ".$crit);
        $result1->execute();

        return $result1->fetchAll(PDO::FETCH_ASSOC);

    /*    $data = array();
    $i=0;
        foreach($result1->fetchAll(PDO::FETCH_ASSOC) as $item){
         array_push($data,$item["cod_categoria"],$item["name_series"],$item["initials"],
             $item["year_series"],$item["synopsis"], utf8_encode($item["synopsis"]));
        }

        return  json_encode($data);
        */
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