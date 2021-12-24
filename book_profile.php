<?php
include 'inc/header.php';

Session::CheckSession();
$sId =  Session::get('roleid');

if ($sId === '3') {
    header ('Location:library.php');
}?>

<?php

if (isset($_GET['id'])) {
    $bookid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $updateBook = $users->updateBookByIdInfo($bookid, $_POST);

}
if (isset($updateBook)) {
    echo $updateBook;
}



?>

<div class="card ">
    <div class="card-header">
        <h3>Book profile <span class="float-right"> <a href="manageBook.php" class="btn btn-primary">Back</a> </h3>
    </div>
    <div class="card-body">

        <?php
        $getBinfo = $users->getBookInfoById($bookid);
        if ($getBinfo) {






            ?>


            <div style="width:100%; margin:0px auto">

                <form class="col-md-8 offset-md-2" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="book_title">Book title</label>
                        <input type="text" name="book_title" value="<?php echo $getBinfo->book_title; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">author</label>
                        <input type="text" name="author" value="<?php echo $getBinfo->author; ?>" class="form-control">
                    </div>
                            <div class="form-group">
                                <label for="categoryid">Select user Role</label>
                                <select class="form-control" name="categoryid" id="categoryid">

                                    <?php

                                    if($getBinfo->categoryid == '1'){?>
                                        <option value="1" selected='selected'>Scientific</option>
                                        <option value="2">Fantastic</option>
                                        <option value="3">Novel</option>
                                    <?php }elseif($getBinfo->categoryid == '2'){?>
                                        <option value="1">Scientific</option>
                                        <option value="2" selected='selected'>Fantastic</option>
                                        <option value="3">Novel</option>
                                    <?php }elseif($getBinfo->categoryid == '3'){?>
                                        <option value="1">Scientific</option>
                                        <option value="2">Fantastic</option>
                                        <option value="3" selected='selected'>Novel</option>
                                    <?php } ?>


                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-success">Update</button>

                        </div>


                </form>
            </div>



    </div>
</div>
<footer class="text-muted">
        <div class="container">
            <p class="float-right">
            </p>
            <p>Copyright &copy; 2021. All rights not reserved</p>
        </div>
    </footer>


<?php
include 'inc/footer.php';
}
?>



