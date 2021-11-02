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
     public function getUser($id) {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = ?');
        $query->execute(array($id));

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


    function modUser($id, $newRol){
        
        try{
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query = $this->db->prepare('UPDATE users SET rol=? WHERE id=?');
            $query->execute([$newRol, $id]); 
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }
    }
}
