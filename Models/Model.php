<?php

class Model {

    private $db;

    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_book2;charset=utf8', 'root', '');
    }

    /* levanto todos los libros para render de listados */
    
    function getBook ($id){
        $sentence= "SELECT * FROM books WHERE id_book=?";
        $query = $this->db->prepare($sentence);
        $query->execute([$id]);
        $book = $query->fetch(PDO::FETCH_OBJ);
        return $book;
    }
    
    function getBooks (){
        $sentence= "SELECT * FROM books INNER JOIN countries ON books.id_country = countries.id_country" ;
        $query = $this->db->prepare($sentence);
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }

/*********** PAGINACION ***********************/

    function itemsPerPage(){
        $itemsPerPage = 2;     /*   CANTIDAD DE ITEMS POR PAGINA QUE SE MOSTRARAN */
        return $itemsPerPage;
    }

    function getBooksLimit ($page = NULL){
        
        $itemsPerPage= $this->itemsPerPage();
        $iniciar=($page-1)*$itemsPerPage;
        $sentence= "SELECT * FROM books INNER JOIN countries ON books.id_country = countries.id_country LIMIT $iniciar,$itemsPerPage" ;
        $query = $this->db->prepare($sentence);
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }

    function getRowsBooks(){
        $sentence= "SELECT * FROM books" ;
        $query = $this->db->prepare($sentence);
        $query->execute();
        $rows = $query->rowCount();
        return $rows;
    }

   
/**********************************/
    function getUsers (){
        $sentence= "SELECT * FROM users";
        $query = $this->db->prepare($sentence);
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function addBook($title, $autor, $year, $country, $image = null){
        $pathImage = null;
        if ($image)
            $pathImage = $this->uploadImage($image);
        $query = $this->db->prepare("INSERT INTO books(b_title, b_autor, b_year, id_country, b_image) VALUES (?,?,?,?,?)");
        $query->execute([$title, $autor, $year, $country,$pathImage]);

    }

    private function uploadImage($image){
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }

    function modBook($id, $newTitle, $newAutor, $newYear, $newCountry){
        try {
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query = $this->db->prepare('UPDATE books SET b_title=?, b_autor=?, b_year=?, id_country=? WHERE id_book=?');
            $query->execute([$newTitle, $newAutor, $newYear, $newCountry, $id]);
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }

    }

    function delBook($id){
        $query = $this->db->prepare("DELETE FROM books WHERE id_book=?");
        $query->execute(array($id));
    }
    
    
    function getCountry($id){
        $query = $this->db->prepare("SELECT * FROM countries WHERE id_country=?");
        $query->execute([$id]);
        $country = $query->fetch(PDO::FETCH_OBJ);
        return $country;
    }

    function getCountries(){
        $sentence="SELECT * FROM countries";
        $query = $this->db->prepare($sentence);
        $query->execute();
        $countries = $query->fetchAll(PDO::FETCH_OBJ);
        return $countries;
    }

    function addCountry($name){
        $query = $this->db->prepare("INSERT INTO countries(name) VALUES (?)");
        $query->execute([$name]);
    }

    function modCountry($id, $newName){
        
        try{
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query = $this->db->prepare('UPDATE countries SET name=? WHERE id_country=?');
            $query->execute([$newName, $id]); 
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }
    }

    function delCountry($id){
        $query = $this->db->prepare("DELETE FROM countries WHERE id_country=?");
        $query->execute(array($id));
    }

    function search($filter){
        $row=null;
        $query = $this->db->prepare("SELECT * FROM books WHERE b_title LIKE '%$filter%'");
        $query->execute($filter);
        $listSearch = $query->fetchAll(PDO::FETCH_OBJ);

        while ($result = $query->fetch()){//Aqui indicamos que mientras haya un parametro a recorrer haga algo
            $row[] = $result; // hacemos que la variable row guarde el array creado arriba
        }
        return $row; //retornamos el array de row
    }
}


