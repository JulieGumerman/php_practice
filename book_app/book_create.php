<?php include "utils.php";?>

<?php 
    
    createBook();
            

?>


<?php include "includes/header.php"; ?>
<div class="container">
   <div class="col-sm-6">
   <h1 class="text-center">Enter book in database.</h1>
    <form
       action="book_create.php"
       method="post"
       style="padding-top:30px;"
    >
    <div class="form-group">
       <label for="title">Book title</label>
        <input
            type="text"
            name="title"
            class="form-control"
        >
    </div>
    <div class="form-group">
       <label for="description">Description</label>
       <input
           class="form-control"
           type="text"
           name="description"
       >
        
    </div>

    <input 
        class="btn btn-primary"
        type="submit" 
        name="submit"
        value="CREATE"
    >
    </form>
    </div>
</div>    
<?php include "includes/footer.php"; ?>