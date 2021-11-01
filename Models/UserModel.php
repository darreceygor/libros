<?php

class UserModel{

    private $db;
    
     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_book2;charset=utf8', 'root', '');
     }

    /* levanto todos los libros para render de listados */
    function getUsers($email){
          $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
          $query->execute([$email]);
          $user = $query->fetch(PDO::FETCH_OBJ);

          return $user;
     }

     /*traes un usuario*/
     public function getUser($email) {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute(array($email));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    function addUser($email,$password,$rol){

        $query = $this->db->prepare('INSERT INTO users(email,password,rol) VALUES (?,?,?)');
        $query->execute([$email,$password,$rol]);
   }





   function delUser($id){
    $query = $this->db->prepare("DELETE FROM users WHERE id=?");
    $query->execute(array($id));
}

}
