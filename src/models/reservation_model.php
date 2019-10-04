<?php

class Reservation_Model extends Model
{
    function __construct(){
        parent:: __construct();
        
    }

    function addReservation(){
        $sth = $this->db->prepare('INSERT INTO `guest`(`first_name`, `last_name`, `email`, `address`, `date_of_birth`, `origin`, `destination`, `arrival`, `departure`, `nationality`, `passport_no`, `date_issued`, `tel_no`, `company`, `staff_id`) VALUES (:first_name,:last_name,:email,:address,:date_of_birth,:origin,
        :destination, :arrival, :departure,:nationality,:passport_no,:date_issued,:tel_no,:company,:staff_id)');
        $sth->execute(array(
            'first_name'=> $_POST['first_name'],
            'last_name'=>$_POST['last_name'],
            'email'=>$_POST['email'],
            'address'=>$_POST['address'],
            'date_of_birth'=>$_POST['date_of_birth'],
            'origin'=>$_POST['origin'],
            'destination'=>$_POST['destination'],
            'arrival'=>$_POST['arrival'],
            'departure'=>$_POST['departure'],
            'nationality'=>$_POST['nationality'],
            'passport_no'=>$_POST['passport_no'],
            'date_issued'=>$_POST['date_issued'],
            'tel_no'=>$_POST['tel_no'],
            'company'=>$_POST['company'],
            'staff_id'=>Session::get('data')['id']
        ));
        exit;
    }
    function List(){
        $sth = $this->db->query('SELECT * FROM guest ORDER BY id DESC LIMIT 50');
        $data = $sth->fetchAll();
       echo json_encode($data);
       exit;
    }
}



?>