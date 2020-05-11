<?php include "db.php" ?>


<?php 

function createBook() {
    global $connection; 
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        if ($connection) {
            echo "New book added to database";
        } else {
            die("Database connection failed");
        }
        

        $query = "INSERT INTO book_titles(title, description)";
        $query .= "VALUES ('$title', '$description')";

        $result = mysqli_query($connection, $query);

        if (!$result){
            die('QUERY FAILED!!!' . mysqli_error());
        } else {
            echo "Record created.";
        }
    }
}

?>


<?php 

function readBooks() {
    global $connection;
    
    $query = "SELECT * FROM book_titles";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("QUERY FAILED!!!" . mysqli_error());
    } 
    
    while ($row = mysqli_fetch_row($result)) {
        print_r($row);
    }
}
 
?>