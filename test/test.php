<?php

$connection = new PDO("mysql:host=localhost;dbname=mb", "root", "");


// $query = "INSERT users (admin, username, email, password) VALUE ('0','klim', 'klim@mail.ru', '213')";
// $connection->exec($query);

$admin = 0;
$username = 'saza';
$email = 'saza@mail.ru';
$password = 12345;

$param = [
    'a'=>$admin, 
    'username'=>$username,
     'email'=>$email, 
     'password'=>$password
];

$sql = "INSERT users (admin, username, email, password) VALUE (:a, :username, :email, :password)";

$query = $connection->prepare($sql);

$query->execute($param);

// интерфейс
interface pattern{
    public function getpattern();
    public function getCount();
}
// при реализации интерфейса, абстрктные методы реализуются в классе 

class movie implements pattern{    
    public function getpattern()
    {
        // TODO: Implement getVideos() method.
        echo "getVideos";
    }

    public function getCount()
    {
        // TODO: Implement getCount() method.
        echo "getCount";
    }
}

movie::getpattern();