<?php

class MainsController
{

    public function index()
    {
        session_start();
        require_once('views/main/index.php');
        require_once('models/main.php');
        if (isset($_POST['signin'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $query = DB::InstanceDB()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
                foreach ($results as $result) {
                    $_SESSION['login'] = $_POST['username'];
                    echo "<script type='text/javascript'> document.location = '?controller=homes&action=index'; </script>";
                }
            } else {
                echo "<script>alert('Information Not in database');</script>";
                echo "<script type='text/javascript'> document.location = '?'; </script>";
            }
        }
    }

    public function register()
    {

        require_once('views/main/register.php');
        require_once('models/main.php');
        if (isset($_POST['register'])) {
            Main::register();
        }
    }
}
