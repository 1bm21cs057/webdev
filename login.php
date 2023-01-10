<?php
 $mail=$_POST['mail'];
 $psw=$_POST['psw'];
 $cpsw=$_POST['cpsw'];
//database connection//
$conn=new mysqli('localhost', 'root','', 'signup');
if($conn->connect_error){
    die('Connection Failed: ' .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into signin(mail, psw, cpsw) values(?, ?, ?)");
    $stmt->bind_param("sss",$mail, $psw, $cpsw);
    $stmt->execute();
    echo "Signed in successfully";
    $stmt->close();
    $conn->close();


}
?>
