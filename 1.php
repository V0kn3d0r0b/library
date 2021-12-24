<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1' || '2'){


?>
<?php

if (isset($_GET['remove'])) {
    $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
    $removeBook = $users->deleteBookById($remove);
}

?>
<div class="card ">
    <div class="card-header">
        <h3><i class="fa fa-book mr-2"></i>Book list <span class="float-right">Welcome! <strong>
            <span class="badge badge-lg badge-secondary text-white">
<?php
$username = Session::get('username');
if (isset($username)) {
    echo $username;
}
?></span>

          </strong></span></h3>
    </div>
    <div class="card-body pr-2 pl-2">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th  class="text-center">SL</th>
                <th  class="text-center">Book title</th>
                <th  class="text-center">Author</th>
                <th  class="text-center">Category</th>
                <th  class="text-center">Created at</th>
                <th  class="text-center">File</th>
                <th  width='25%' class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $allBook = $users->selectAllBookData();

            if ($allBook) {
                $i = 0;
                foreach ($allBook as  $value) {
                    $i++;

                    ?>

                    <tr class="text-center"
                    <?php if (Session::get("id") == $value->id) {
                        echo "style='background:#d9edf7' ";
                    } ?>
                    >

                    <td><?php echo $i; ?></td>
                    <td><?php echo $value->book_title; ?></td>
                    <td><?php echo $value->author; ?> </td>
                    <td><?php if ($value->categoryid  == '1'){
                            echo "<span class='badge badge-lg badge-dark text-white'>Scientific</span>";
                        } elseif ($value->categoryid == '2') {
                            echo "<span class='badge badge-lg badge-dark text-white'>Fantastic</span>";
                        }elseif ($value->categoryid == '3') {
                            echo "<span class='badge badge-lg badge-dark text-white'>Novel</span>";
                        } ?></td>
                    <td><span class="badge badge-lg badge-secondary text-white"><?php echo $users->formatDate($value->created_at);  ?></span></td>
                    <td><?php echo $value->pdf_path; ?> </td>
                    <td>
                    <?php if ( Session::get("roleid") == '1' || Session::get("roleid") == '2') {?>
                        <a class="btn btn-success btn-sm
                            " href="book_profile.php?id=<?php echo $value->id;?>">View</a>
                        <a class="btn btn-info btn-sm " href="book_profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("id") == $value->id) {
                            echo "disabled";
                        } ?>
                             btn-sm " href="?remove=<?php echo $value->id;?>">Remove</a>
                    <?php  }elseif(Session::get("id") == $value->id  && Session::get("roleid") == '2'){ ?>
                        <a class="btn btn-success btn-sm " href="book_profile.php?id=<?php echo $value->id;?>">View</a>
                        <a class="btn btn-info btn-sm " href="book_profile.php?id=<?php echo $value->id;?>">Edit</a>
                    <?php  }elseif( Session::get("roleid") == '2'){ ?>
                        <a class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                        } ?>
                          " href="book_profile.php?id=<?php echo $value->id;?>">View</a>
                        <a class="btn btn-info btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                        } ?>
                            <?php } ?>

                        </td>
                    </tr>
                <?php }}else{ ?>
                <tr class="text-center">
                    <td>No user availabe now !</td>
                </tr>
            <?php } ?>

            </tbody>

        </table>
        <?php }else{

            header('Location:library.php');



        }
        ?>










    </div>
</div>



<?php
include 'inc/footer.php';

?>
