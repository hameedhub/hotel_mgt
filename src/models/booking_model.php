<?php
class Booking_Model extends Model
{
    function __construct(){
        parent:: __construct();
    }
    function availRooms(){
        $sth = $this->db->query('SELECT a.id, a.room_name, a.location, a.status, b.price, b.room_type_name
        FROM room a, room_type b
        WHERE a.room_type = b.id AND a.status = "Available"');
        $data = $sth->fetchAll();
       echo json_encode($data);
       exit;
    }
    function bookedGuest(){
        $sth = $this->db->query('SELECT * FROM guest WHERE status = "default"');
        $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function addBooking(){
        $sth = $this->db->prepare('INSERT INTO `reservation`(`guest_id`, `room_id`, `check_in`, `check_out`, `adults`, `children`, `amount_paid`, `balance`, `status`, `rate`, `staff_id`) VALUES (:guest_id,:room_id,:check_in,:check_out,:adults,:children,:amount_paid,:balance,:status,:rate,:staff_id)');
        $sth->execute(array(
            'guest_id'=> $_POST['guest_id'],
            'room_id'=>$_POST['room_id'],
            'check_in'=>$_POST['check_in'],
            'check_out'=>$_POST['check_out'],
            'adults'=>$_POST['adults'],
            'children'=>$_POST['children'],
            'amount_paid'=>$_POST['amount_paid'],
            'balance'=>$_POST['balance'],
            'rate'=>$_POST['rate'],
            'status'=>'CheckedIn',
            'staff_id'=>Session::get('data')['id']
        ));
        $sthRoom = $this->db->query('UPDATE room SET status = "Booked" WHERE id = "'.$_POST['room_id'].'"');
        $sthRoom->execute();
        $sthGuest = $this->db->query('UPDATE guest SET status = "booked" WHERE id = "'.$_POST['guest_id'].'"');
        $sthGuest->execute();

        exit;
    }
    function viewBooking(){
        $sth = $this->db->query('SELECT c.room_name, b.id, a.id as guest_id, c.id as room_id, a.first_name, a.last_name, b.check_in, b.check_out, b.adults, b.children, b.rate, b.amount_paid, b.balance, b.status
        FROM guest a, reservation b, room c
        WHERE a.id = b.guest_id AND b.room_id = c.id AND b.status = "CheckedIn" ORDER BY id DESC');
        $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function checkout(){
        echo   $arr = $_POST['data'];
            $data =  explode(',', $arr);

       $id = $data[0];
       $room_id = $data[1];
       $guest_id = $data[2];
       $sth = $this->db->prepare('UPDATE reservation SET status= "CheckedOut" WHERE id= "'.$id.'"');
       $sth->execute();
        $sth = $this->db->prepare('UPDATE guest SET status= "default" WHERE id= "'.$guest_id.'"');
        $sth->execute();
        $sth = $this->db->prepare('UPDATE room SET status= "Available" WHERE id= "'.$room_id.'"');
        $sth->execute();
        exit;
    }
    function roomTab($id){
      $sth = $this->db->query('SELECT c.room_name, d.room_type_name, d.price, b.id, a.id as guest_id, c.id as room_id, a.first_name, a.last_name, b.check_in, b.check_out, b.adults, b.children, b.rate, b.amount_paid, b.balance, b.status
      FROM guest a, reservation b, room c, room_type d
      WHERE a.id = b.guest_id AND b.room_id = c.id AND c.room_type = d.id AND b.id = '.$id.' ORDER BY id DESC');
      return $data = $sth->fetch();
      exit;
    }

}



?>
