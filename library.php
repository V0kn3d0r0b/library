<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === ''){
    header('Location:userListuserList.php');
}
$logMsg = Session::get('logMsg');
if (isset($logMsg)) {
    echo $logMsg;
}
$msg = Session::get('msg');
if (isset($msg)) {
    echo $msg;
}

$allBook = $users->selectAllBookData();


            ?>




    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <title>Альбом | Album example for Bootstrap (BS 4.0)</title>
    </head>
    <body>

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <table id="example"></table>


<?php
        if ($allBook) {
        foreach ($allBook as  $value) {
        ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
<!--  на случай, если понадобятся картинки--><?php /*<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"  src="<?php echo $value->img_path; ?>"> */?>
                    <div class="card-body">
                        <p class="card-text">Title: "<?php echo $value->book_title; ?>"</p>
                        <p class="card-text">Author: <?php echo $value->author; ?></p>
                        <div class"d-flex justify-c=ontent-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php echo $value->pdf_path; ?>" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <?php }} ?>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Copyright &copy; 2021. All rights not reserved</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://bootstrap-4.ru/assets/js/vendor/popper.min.js"></script>
    <script src="https://bootstrap-4.ru/dist/js/bootstrap.min.js"></script>
    <script src="https://bootstrap-4.ru/assets/js/vendor/holder.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    </body>
    </html>

<?php
include 'inc/footer.php';

?>
