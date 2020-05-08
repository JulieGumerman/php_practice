<?php 
include "db.php";
include "utils.php";

createUser();


?>


<?php 
include "includes/header.php";
include "includes/footer.php";
?>

    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Create user</h1>
            <form
                action="login_create.php"
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
                <input 
                    class="btn btn-primary"
                    type="submit" 
                    name="submit" 
                    value="CREATE">
            </form>
        </div>
    </div>
    
