<?php

include_once "model/Request.php";
include_once "model/usuario_episodio.php";
include_once "database/DBConnector.php";

class UsuarioEpisodioController
{
    public function register($request)
    {
        $params = $request->get_params();
        $user_episode = new usuario_episodio
           ($params["idt_usuario_episodio"],
            $params["cod_episodio"],
            $params["cod_usuario"],
            $params["cod_status"],
            $params["avaliacao"],
            $params["dta_atualizacao"],
            $params["comment"]);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($user_episode));
    }

    private function generateInsertQuery($user_episode)
    {
        $query =  "INSERT INTO usuario_episodio (cod_episodio, cod_usuario, cod_status, avaliacao, dta_atualizacao, comment) VALUES
        ('".$user_episode->getCodEpisodio()."','".
            $user_episode->getCodUsuario()."','".
            $user_episode->getCodStatus()."','".
            $user_episode->getAvaliacao()."',NOW(),'".
            $user_episode->getComment()."')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT cod_episodio, cod_usuario, cod_status, avaliacao, dta_atualizacao, comment
        FROM usuario_episodio WHERE ".$crit);

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

        return "UPDATE usuario_episodio SET " . $crit . " WHERE idt_usuario_episodio = '" . $params["idt_usuario_episodio"] . "'";
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

        $result = $conn->prepare("DELETE FROM usuario_episodio WHERE idt_usuario_episodio = ?");

        $result->bindParam(1, $params["idt_usuario_episodio"]);

        $result->execute();

        return $result;
    }
}