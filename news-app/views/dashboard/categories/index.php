<?php require_once('../../../app/config.php');?>
<?php require_once(MAIN_PATH.'/views/dashboard/inc/header.php');?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>ALL categories</h1>
        </div>
        <div class="col-12">
        <?php include MAIN_PATH. "/views/dashboard/inc/messages.php";  ?>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $categories=dbget('categories');$i=1;?>
                   <?php foreach($categories as $category) :  ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $category['name'];  ?></td>
                        <td><a href="<?php echo URL.'views/dashboard/categories/edit.php?id='.$category['id']; ?>" class="btn btn-info">edit</a></td>
                        <td><a href="<?php echo URL.'controllers/dashboard/categories/delete.php?id='.$category['id']; ?>"" class="btn btn-danger">delete</a></td>
                        
                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once(MAIN_PATH.'/views/dashboard/inc/footer.php');?>