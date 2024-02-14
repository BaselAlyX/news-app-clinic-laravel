<?php require_once('../../../app/config.php');?>
<?php
$category=dbrow("categories","id",getinput('id'));
 if(!$category){
    die("category not found");
} ?>
<?php require_once(MAIN_PATH.'/views/dashboard/inc/header.php');?>


<div class="container">
    <div class="row">
        <div class="col-12 m-3">
            <h1 class="text-center">Edit categories</h1>
        </div>
        <div class="col-8 mx-auto">
          <form action="<?php echo URL."controllers/dashboard/categories/update.php?id=".$category['id']; ?>" class="form border p-3 my-3" method="POST">
          
          <?php include MAIN_PATH. "/views/dashboard/inc/messages.php";  ?>
          <div class="mb-3">
            <label for="">enter category name</label>
            <input type="text" name="name" value="<?= $category['name'];  ?>" class="form-control">
          </div>     
          <div class="mb-3">
            <input type="submit" value="save" class="form-control text-white bg-info">
          </div>   
        </form>
        </div>
        </div>
    </div>
</div>


<?php require_once(MAIN_PATH.'/views/dashboard/inc/footer.php');?>