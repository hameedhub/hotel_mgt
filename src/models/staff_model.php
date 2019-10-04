<?php
class Staff_Model extends Model
{
    function __construct(){
        parent:: __construct();

    }
    function view(){
        $sth = $this->db->query('SELECT a.id, a.first_name, a.last_name, a.email, a.phone, a.address, a.status, b.access
        FROM users a, users_access b
        WHERE a.access = b.id');
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function viewUsers(){
        $sth = $this->db->query('SELECT * FROM users');
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function viewAccess(){
        $sth = $this->db->query('SELECT * FROM users_access');
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
        exit;
    }
    function role(){
        $sth = $this->db->prepare('UPDATE users SET access = :access WHERE id =:id');
        $sth->execute(array(
            ':access'=>$_POST['access'],
            ':id'=>$_POST['staff_id']
        ));
        exit;
    }
}


?>