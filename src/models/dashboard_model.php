<?php

class Dashboard_Model extends Model
{
    function __contruct(){
        parent:: __contruct();
    }
    function insertEvent(){
        
        $sth = $this->db->prepare('INSERT INTO `events`(`title`, `date`, `description`, `staff_id`) VALUES (:title, :date, :description, :staff_id)');
        $sth->execute(array(
            'title'=>$_POST['title'],
            'date'=>$_POST['date'],
            'description'=>$_POST['description'],
            'staff_id'=>Session::get('data')['id']
        ));
        exit;
    }
    function eventList(){
       $sth = $this->db->prepare('SELECT * FROM events ORDER BY id DESC');
       $sth->execute();
       $data = $sth->fetchAll();
       echo json_encode($data);
    exit;
    }

}

?>