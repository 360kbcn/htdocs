<?php
/**
 * A Slim 3 middleware to add simple statistics.
 *
 * @author      Pau Granell Rodríguez <pau@santandreu.net>
 * @copyright   2017 Pau Granell Rodríguez     
 * @license     http://www.apache.org/licenses/LICENSE-2.0
 * @version     1.0
 */


class StatisticsUrlMiddleware
{
    public function __invoke($request, $response, $next)
    {   
        $db = [
        'host' => "localhost",
        'name' => "entrenador2017",
        'user' => "root",
        'pass' => "",
        'port' => "3306",
        'type' => "mysql"
        ];

        try{

            $conn = new PDO("{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
        }catch(PDOException $e){

            $conn = null;
        }

        $apartat = $request->getUri()->getPath();

        $sql = "SELECT * FROM estadistica WHERE url='".$apartat."';";
        $res = $conn->query($sql);
        $result = $res->fetch();

        if(empty($result)){

            $sql_add = "INSERT INTO estadistica (url, visites) VALUES ('".$apartat."', '1');";
            $result_add = $conn->exec($sql_add);

            $a = $apartat;

        }else{

            $i = $result["visites"]+1;

            $sql_update = "UPDATE estadistica SET visites='".$i."' WHERE url='".$apartat."' ;";
            $result_update = $conn->exec($sql_update);


        }

        $response = $next($request, $response);
       

        return $response;
    }
}

?>