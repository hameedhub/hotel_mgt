<?php

class Sales_Model extends Model
{
    function __construct(){
        parent:: __construct();
    }
    function services(){
        $sth = $this->db->query('SELECT * FROM services ORDER BY id DESC');
        $data = $sth->fetchAll();
       echo json_encode($data);
       exit;
    }
    function addSale(){
        $sth = $this->db->prepare('INSERT INTO `sales`( `service_id`, `amount`, `balance`, `log`, `staff_id`) VALUES (:service_id,:amount,:balance,:log,:staff_id)');
        $sth->execute(array(
            'service_id'=> $_POST['service_id'],
            'amount'=> $_POST['amount'],
            'balance'=> $_POST['balance'],
            'log'=> $_POST['log'],
            'staff_id'=> Session::get('data')['id'],
        ));

    }
}



?>