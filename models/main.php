<?php
class Main
{
    public function register()
    {

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql1 = "SELECT * FROM users WHERE username='$username'";
        $query1 = DB::InstanceDB()->prepare($sql1);
        $query1->execute();
        $user = $query1->fetch();
        if ($user) {
            echo "<script>alert('Username has been registered');</script>";
        } else {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

            $query = DB::InstanceDB()->prepare($sql);
            $query->execute();
            echo "<script>alert('Registration has been successful');</script>";
            echo "<script type='text/javascript'> document.location = '?'; </script>";
        }
    }

    public function signin()
    {

        
    }
}
