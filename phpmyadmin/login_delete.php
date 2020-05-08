
<?php 
include "db.php";
include "utils.php"
?>

<?php 

        deleteUser();   

?>



<?php 
    include "includes/header.php";
    include "includes/footer.php";
?>
    <div class="container">
        <div class="col-sm-6">
            <form
                action="login_delete.php"
                method="post"
                style="padding-top:30px;"
            >
                <div class="form-group">
                    <label for="username">Username</label>
                    <input 
                        type="text" 
                        name="username" 
                        class="form-control"
                    >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        name="password"
                        class="form-control"
                    >
                </div>
                <div class="form-group">
                   <select name="id" id="">
                   <?php 
                    
                        showAllData();
                    
                    ?>
                   </select>
                   

                </div>
                <input 
                    class="btn btn-primary"
                    type="submit" 
                    name="submit" 
                    value="DELETE">
            </form>

                
        </div>
    </div>
    
