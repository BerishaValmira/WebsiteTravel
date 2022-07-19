<?php
include_once '../repository/userRepositoryKon.php';

$userrId = $_GET['id'];

$userRepositoryKon = new UserRepositorykon();

$userr = $userRepositoryKon->getUserrById($userrId);




?>


<form action="" method="POST">
        <input type="text" name="id" value="<?=$userr['IDKon']?>" > <br><br>
        <input type="text" name="name" value="<?=$userr['Name']?>"> <br><br>
        <input type="text" name="email" value="<?=$userr['Email']?>"> <br><br>
        <input type="text" name="comment" value="<?=$userr['Comment']?>"> <br><br>
      

        <input type="submit" name="save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['save'])){
    $id = $userrId;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $userRepositoryKon->updateUserr($id,$name,$email,$comment);
    header("location:dashboardKon.php");
}

?>