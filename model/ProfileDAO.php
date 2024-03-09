<?php
    require_once 'Profile.php';

    class ProfileDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "mar8DBuser", "mar8DBpass", "mar8DB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addProfile($profile){
            $result=0;
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO profiles (firstName, lastName, username, passwd) VALUES (?, ?, ?, ?);");
            $stmt->bind_param("ssss", $profile->getFirstName(),$profile->getLastName(),$profile->getUsername(),$profile->getPasswd());
            if($stmt->execute()){
                $result=1;
            }
            $stmt->close();
            $connection->close();
            return $result;
        }
    }
?>
