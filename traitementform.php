<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $lstname = $_POST['lstname'];
        $passwrd = $_POST['passwrd'];
        if(empty($email) || empty($passwrd)){
            echo "<script>alert('Email or password not found, please insert them！');</script>";
        }
        else{
            try{
	                $db = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
                die('Erreur : '   . $e->getMessage());
            }
            $sql = "insert into users(first_name_user,last_name_user,email_user,password_user) values('";

        }
    }


?>