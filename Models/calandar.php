<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 19/01/2019
 * Time: 21:56
 */
namespace Models;
use Services\Connect;

class calandar
{


    private $id;
    private $title;
    private $start;
    private $end;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }


    public function getCalandar()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM test");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function ajouterCalendar($title, $start,$end)
    {
        $db = $this->db;
        $query = $db->prepare ("INSERT INTO test(title, start, end ) VALUES (:title,:start,:end)");
        return $query->execute (array(
            'title' => $title,
            'start' => $start,
            'end' => $end

        ));
    }

//
//    function get_user($id=0)
//{
//    global $connection;
//    $query="SELECT * FROM users";
//    if($id != 0)
//    {
//        $query.=" WHERE id=".$id." LIMIT 1";
//    }
//    $response=array();
//    $result=mysqli_query($connection, $query);
//    while($row=mysqli_fetch_assoc($result))
//    {
//        $response[]=$row;
//    }
//    header('Content-Type: application/json');
//    echo json_encode($response);
//}

}