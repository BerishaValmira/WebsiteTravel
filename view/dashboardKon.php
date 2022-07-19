<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../repository/userRepositoryKon.php';
        $userRepositoryKon  = new UserRepositoryKon();
        $users = $userRepositoryKon->getAllUserrs();
        foreach($users as $userr){
           echo 
           "
           <tr>
               <td>$userr[IDKon]</td>
               <td>$userr[Name]</td>
               <td>$userr[Email]</td>
               <td>$userr[Comment]</td>
               <td><a href='editKon.php?id=$userr[IDKon]'>Edit</a></td>
               <td><a href='deleteKon.php?id=$userr[IDKon]'>Delete</a></td>

           </tr>
           ";
        }
        
        
        ?>
    </table>
</body>
</html>