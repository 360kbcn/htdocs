<?php
/**
*Libreria de funciones.
*
*@author anónimo <anonimo@server.com>
*@license GPl
*/
namespace Lib\arrays;

/**
*/
class DataAccess{

    /**
    */
    private $pdo;

    /**
    *Funcion que conecta amb la base de dades
    */
    public function __construct($db){
        $this->pdo = new PDO("{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    /**
    *Funcion que devuelve los temas
    */
    public function getTemas(){

        $sql = "select * from temas;";
        $res = $this->pdo->query($sql);
        return $res->fetchAll();
    }
    /**
    *Funcion que devuelve un solo tema
    */
    public function getTema($id){

        $sql = "select * from temas WHERE id = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetch();
    }
    /**
    *Funcion que devuelve las preguntes de un tema en concreto
    */
    public function getPreguntes($id){

        $sql = "SELECT * FROM preguntas WHERE tema = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetchAll();
    }
    /**
    *Funcion que devuelve una sola pregunta
    */
    public function getPregunta($id){

        $sql = "SELECT * FROM preguntas WHERE id = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetch();
    }
    /**
    *Funcion que devuelve las respuestas de una pregunta en concreto
    */
    public function getRespostes($id){

        $sql = "SELECT * FROM respuestas WHERE pregunta = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetchAll();
    }
    /**
    *Funcion que devuelve una sola respuesta
    */
    public function getResposta($id){

        $sql = "SELECT * FROM respuestas WHERE id = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetch();
    }
    /**
    *Funcion que devuelve una unica respuesta
    */
    public function getRespostaCorrecta($id){

        $sql = "SELECT * FROM respuestas WHERE id='".$id."';";
        $res = $this->pdo->query($sql);
        $resposta = $res->fetch();

        if($resposta["verdadera"]){

            return false;
        }else{

            $sql = "SELECT * FROM respuestas WHERE pregunta='".$resposta["pregunta"]."' AND verdadera='1';";
            $res = $this->pdo->query($sql);
            $resposta = $res->fetch();

            return $resposta;
        }
    }
    /**
    *Funcion que añade pregunta
    */
    public function addPregunta($parametres){


        if($parametres["tema"]==0 && !empty($parametres["tema_nou"])){

            $sql_add_tema = "INSERT INTO temas (titulo, titulo_url)
            values ('".$parametres["tema_nou"]."', '".generarTituloParaUrl($parametres["tema_nou"])."');";

            $result_add = $this->pdo->exec($sql_add_tema);

            $sql = "SELECT * FROM temas WHERE titulo='".$parametres["tema_nou"]."';";
            $res = $this->pdo->query($sql);
            $tema = $res->fetch();
            $tema_id = $tema["id"];

        }elseif($parametres["tema"]!=0){

            $tema_id = $parametres["tema"];
        }

        $sql_add_pregunta = "INSERT INTO preguntas (pregunta, tema) values ('".$parametres["pregunta"]."', '".$tema_id."');";
        $result_add_pregunta = $this->pdo->exec($sql_add_pregunta);

        $sql_pregunta = "SELECT * FROM preguntas
                        WHERE pregunta='".$parametres["pregunta"]."' AND tema='".$tema_id."';";
        $res_pregunta = $this->pdo->query($sql_pregunta);
        $pregunta = $res_pregunta->fetch();

        $quant_respostes = count($parametres)-4;

        for($i=1; $i<=$quant_respostes; $i++){

            if($parametres["resposta_ok"]==$i) $respostaOK = 1; else $respostaOK = 0;

            $sql_add_resposta = "INSERT into respuestas (respuesta, verdadera, pregunta)
            VALUES ('".$parametres["resposta_".$i]."', '".$respostaOK."', '".$pregunta["id"]."');";
            $result_add_resposta = $this->pdo->exec($sql_add_resposta);
        }

        if($result_add_resposta=="0") return false; else return true;

    }
    /**
    *Funcion que devuelve las estadisticas.
    */
    public function getStatics(){

        $sql = "SELECT * FROM estadistica;";
        $res = $this->pdo->query($sql);
        $result = $res->fetchAll();

        $statics = [];

        foreach ($result as $static) {

            $apartat = strstr($static["url"], "/");
            $apartat_id = str_replace("/", "", $apartat);

            $sql = "SELECT titulo FROM temas WHERE id='".$apartat_id."';";
            $res = $this->pdo->query($sql);
            $tema = $res->fetch()['titulo'];
            $url = $apartat = strstr($static["url"], "/", true)."/".$tema;

            array_push($statics, [$url,$static["visites"]]);
        }

    return $statics;
    }


}
?>
