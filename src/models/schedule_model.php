<?php

class Schedule_Model extends Model
{
    function __construct(){
        parent:: __construct();
        
    }
    function viewEvents(){
       $sth = $this->db->query('SELECT * FROM events ORDER BY id DESC');
       $sth->execute();
       $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function delEvent(){
        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM events WHERE id= "'.$id.'"');
        $sth->execute();
        exit;
        exit;
    }
}

?>