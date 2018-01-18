<?php

class AtorTemporadaController
{
    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT s.name_series, t.num_temporada, a.nme_ator FROM ator_temporada AS atemp, series AS s, temporada AS t,
ator AS a WHERE atemp.cod_ator = a.idt_ator AND atemp.cod_temporada = t.idt_temporada AND
 t.cod_serie = s.idt_serie AND ".$crit);

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