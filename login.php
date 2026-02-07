<?php
include "db.php";
if (isset($_POST['login'])) {

    $email    = strtolower(trim(addslashes($_POST['email'])));
    $password = trim(addslashes($_POST['password']));
    
    if(strlen($email)<5 || strlen($password)<3){
        die("Invalid input length");
    }

    $sql = "SELECT * FROM userdetails 
            WHERE email='$email'";

    $result = mysqli_query($conn, $sql) or die("Database error");
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        if(strcmp($row['password'],$password)==0){
            echo "<p style='color:green'>Login successful</p>";
            print "<p>Welcome ".$row['username']."</p>";
        }
        else{
            echo "<p style='color:red'>Wrong password</p>";

        }
        
    }
    else{
        echo "<p style='color:red'>Invalid email </p>";
    }
}
?>