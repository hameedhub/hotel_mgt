<?php

class Room_Model extends Model
{
    function __construct(){
        parent:: __construct();
    }
    function saveType(){
      $sth =$this->db->prepare('INSERT INTO `room_type`(`room_type_name`, `price`, `description`, `staff_id`) VALUES (:room_type_name,:price,:description,:staff_id)');
        $sth->execute(array(
            'room_type_name'=> $_POST['room_type_name'],
            'price'=> $_POST['price'],
            'description'=>$_POST['description'],
            'staff_id'=> Session::get('data')['id']
        ));
        exit;
    }
    function typeList(){
        $sth = $this->db->query('SELECT * FROM room_type ORDER BY id DESC');
        $data = $sth->fetchAll();
       echo json_encode($data);
       exit;

    }
    function addRoom(){
        $sth = $this->db->prepare('INSERT INTO `room`(`room_name`, `room_type`, `location`, `status`) VALUES (:room_name,:room_type,:location,:status)');
        $sth->execute(array(
            'room_name'=> $_POST['room_name'],
            'room_type'=>$_POST['room_type'],
            'location'=>$_POST['location'],
            'status'=>'Available'
        ));
        exit;
    }
    function roomList(){
        $sth = $this->db->query('SELECT a.id, a.room_name, a.location, a.status, b.price, b.room_type_name
        FROM room a, room_type b
        WHERE a.room_type = b.id');
        $data = $sth->fetchAll();
       echo json_encode($data);
       exit;
    }
    function delRoom(){
        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM room WHERE id= "'.$id.'"');
        $sth->execute();
        exit;
    }
    function delType(){
        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM room_type WHERE id= "'.$id.'"');
        $sth->execute();
        exit;
    }

}



?>