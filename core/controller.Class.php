<?php
class Connect extends PDO{
    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=project", 'root', '',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
class Controller {
    // Print data to the screen
    function printData($id){
        $db = new Connect;
        $user = $db -> prepare('SELECT * FROM users ORDER BY id');
        $user -> execute();
       
        while($userInfo = $user -> fetch(PDO::FETCH_ASSOC)){
            $content .= '
            
                <p>'.$userInfo["fullname"].'</p>
                
            ';
        }
        
        return $content;
    }
    // check if user is logged in
    function checkUserStatus($id, $sessions){
        $db = new Connect;
        $user = $db -> prepare("SELECT id FROM users WHERE id=:id AND sessions=:sessions");
        $user -> execute([
            ':id'       => intval($id),
            ':sessions'  => $sessions
        ]);
        $userInfo = $user -> fetch(PDO::FETCH_ASSOC);
        if(!$userInfo["id"]){
            return FALSE;
        }else{
            return TRUE;
        }
    }
    // function for generating password and login session
    function generateCode($length){
		$chars = "vwxyzABCD02789";
		$code = ""; 
		$clen = strlen($chars) - 1;
		while (strlen($code) < $length){ 
			$code .= $chars[mt_rand(0,$clen)];
		}
		return $code;
    }
    
    function insertData($data){
        $db = new Connect;
        $checkUser = $db -> prepare("SELECT * FROM users WHERE email=:email");
        $checkUser -> execute(array(
            'email' => $data['email']
        ));
        $info = $checkUser -> fetch(PDO::FETCH_ASSOC);
        
        if(!$info["id"]){
            $session = $this -> generateCode(10);
            $insertNewUser = $db -> prepare("INSERT INTO users (email, fullname, password, sessions) VALUES ( :email,:f_name, :password, :session)");
            $insertNewUser -> execute([
                ':f_name'   => $data["fullname"],
                
                 ':email'    => $data["email"],
                ':password' => $this -> generateCode(5),
                ':sessions'  => $session
            ]);
            if($insertNewUser){
                setcookie("id", $db->lastInsertId(), time()+60*60*24*30, "/", NULL);
                setcookie("sess", $session, time()+60*60*24*30, "/", NULL);
                header('Location: home.php');
                exit();
            }else{
                return "Error inserting user!";
            }
        }else{
            setcookie("id", $info['id'], time()+60*60*24*30, "/", NULL);
            setcookie("sess", $info["session"], time()+60*60*24*30, "/", NULL);
            header('Location: home.php');
            exit();
        }
    }
}
?>