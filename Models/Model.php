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
        $itemsPerPage = 10;     /*   CANTIDAD DE ITEMS POR PAGINA QUE SE MOSTRARAN */
        return $itemsPerPage;
    }

    function getBooksLimit ($page = NULL){
        
        $itemsPerPage= $this->itemsPerPage();   /*cantidad de items por pagina*/
        $iniciar=($page-1)*$itemsPerPage;       /*el inicio de la muestra esta en el numero de pagina por la cantidad de items*/
        $sentence= "SELECT * FROM books INNER JOIN countries ON books.id_country = countries.id_country LIMIT $iniciar,$itemsPerPage" ;
        $query = $this->db->prepare($sentence);
        $query->execute();
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }

    function getRowsBooks(){                    /*cuento la cantidad de lineas del registro*/
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
        $target = 'img/books' . uniqid() . '.jpg';
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
/*FIN LIBROS*/
/****************************************************************/
/****************************************************************/
    
/*PAISES*/
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

/*VERIFICAR SI PAIS A INGRESAR, EXISTE*/
    function existCountry($name){
            
            $query = $this->db->prepare("SELECT * FROM countries WHERE name LIKE '%$name%'");
            $query->execute();
            $exists = $query->fetchAll(PDO::FETCH_OBJ);
            return $exists; 
        }

/*FIN <PAISES></PAISES> */
/****************************************************************/
/****************************************************************/


/* BUSQUEDA GENERAL SEGUN FILTRO*/
    function search($buscar=NULL,$opcion=NULL){
        
        $query = $this->db->prepare("SELECT * FROM books WHERE $opcion LIKE '%$buscar%'");
        $query->execute();
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows; 
    }

    

}
