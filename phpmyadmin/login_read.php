<?php 
include "db.php";
include "utils.php";
?>
   



<?php 
    include "includes/header.php";
    include "includes/footer.php";
?>

    <div class="container">
        <div class="col-sm-6">
           <pre>
            <?php 
                readUsers();
                
            ?>
            </pre>
                
        </div>
    </div>
    
