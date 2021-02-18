<?php
class Login {

    public static function signin($email,$pass){
        $db = Db::connect();

        $sql = $db->query("SELECT * FROM user WHERE email='".addslashes($email)."' AND password='".addslashes($pass)."'");
        $res = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        if($res){

            $_SESSION[id] = $res[0][id];
            $_SESSION[name] = $res[0][name];
            $_SESSION[email] = $res[0][email];

            return true;
        }else{
            return false;
        }
       
    }
}

?>