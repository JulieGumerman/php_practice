<?php include "db.php"; ?>
<?php 

function showAllData() {
    global $connection;
    
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('QUERY FAILED!!!' . mysqli_error());
    } 
    
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
?>



<?php 
function updateUser() {
    if (isset($_POST['submit'])) {
        global $connection;    
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password'";
        $query .= "WHERE id = $id";
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "User updated.";
        }
    }
}
?>

<?php 
function deleteUser() {
    if (isset($_POST['submit'])) {
        global $connection;    
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "user deleted";
        }
    }
}
?>

<?php 

function createUser () {
    global $connection;
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];





        if($connection) {
            echo "New user created!";
        } else {
            die("Database connection failed");
        }

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";

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

function readUsers () {
    global $connection;
    
 
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('QUERY FAILED!!!' . mysqli_error());
    } 
    
                    while($row = mysqli_fetch_row($result)) {

                        print_r($row);

                    
                
                }
}
?>


