<?php

class Services_Model extends Model
{
    function __construct(){
        parent:: __construct();
    }
    function addService(){
        $sth = $this->db->prepare('INSERT INTO `services`(`name`, `outlet`, `product`, `price`, `description`) VALUES (:name,:outlet,:product,:price,:description)');
        $sth->execute(array(
            ':name'=>$_POST['name'],
            ':outlet'=>$_POST['outlet'],
            ':product'=>$_POST['product'],
            ':price'=>$_POST['price'],
            ':description'=>$_POST['description']
        ));
    }
    function getServices(){
        $sth = $this->db->query('SELECT * FROM services ORDER BY id DESC');
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function delService(){
        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM services WHERE id= "'.$id.'"');
        $sth->execute();
        exit;
    }

}


?>