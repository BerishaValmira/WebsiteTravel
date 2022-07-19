 <?php 
include_once '../repository/userRepositoryKon.php';
include_once '../models/userr.php';

if(isset($_POST['registerButon'])){
    if(empty($_POST['name'])  || empty($_POST['email']) || 
       empty($_POST['comment'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $id = rand(100,800).$name;

       $userr = new Userr($id,$name,$email,$comment);
        $userRepositoryKon = new UserRepositoryKon();
        $userRepositoryKon->insertUserr($userr);
   }
}


?> 