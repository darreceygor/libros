<?php
class CommentsModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_book2;charset=utf8', 'root', '');
    }

    function getAll(){
        $query = $this->db->prepare('SELECT * FROM comments');
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $comments;
        
    }
    
    function getComment($id){
        $query = $this->db->prepare('SELECT * FROM comments WHERE id_comment=?');
        $query->execute();
        $comment = $query->fetch(PDO::FETCH_OBJ);
        
        return $comment;
        
    }

    function addComment($comment, $score, $id_book, $id_user){
        $query = $this->db->prepare ("INSERT INTO comments(comment,score,id_book,id_user) VALUES (?,?,?,?)");
        $query->execute([$comment, $score, $id_book, $id_user]);

    }

    function delComment ($id){
        $query = $this->db->prepare ("DELETE FROM comments WHERE id_comment=?");
        $query->execute([$id]);
    }
}

