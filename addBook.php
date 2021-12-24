<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '3' ) {

    header('Location:library.php');



}

    if (isset($_GET['id'])) {
    $bookid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);} ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addBook'])) {

        $addUser = $users->addNewBookByAdmin($_POST);
    }

    if (isset($addUser)) {
        echo $addUser;
    }


    ?>


    <div class="card ">
        <div class="card-header">
            <h3 class='text-center'>Add New Book</h3>
        </div>
        <div class="cad-body">



            <div style="width:100%; margin:0px auto">

                <form class="col-md-8 offset-md-2" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group pt-3">
                        <label for="book_title">Book title</label>
                        <input type="text" name="book_title"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="pdfs">Book file</label>
                        <input type="file" name="pdfs" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cover_img">Cover image</label>
                        <input type="file" name="cover_img" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="sel1">Select Category</label>
                            <select class="form-control" name="categoryid" id="categoryid">
                                <option value="1">Scientific</option>
                                <option value="2">Fantastic</option>
                                <option value="3">Novel</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addBook" class="btn btn-success">Register</button>
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

?>
