
<?php
$servername="localhost";
$user="root";
$password="";
$database="contact_page";

//connection set
$conn=mysqli_connect($servername,$user,$password,$database);
if($conn){

}
else{
    die("connection failed:" .mysqli_connect_error());
}
?>

 <?php
if(isset($_post['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $selectsubject=$_POST['selectsubject'];
    $message=$_POST['message'];
    $sql="INSERT INTO `user`(`full_name`, `email`, `select_message`, `message`)values ('$fullname', '$email', '$selectmessage', $message)";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "new record created successfully";
    } else{
        echo "error:" . $sql."</br>" .mysql_error($conn);
    }
}
?>
<?php
$servername="localhost";
$user="root";
$password="";
$database="form";
 connection est
 $conn=mysqli_connect($servername,$user,$password,$database);
if($conn){
 
}else{
    die("Connection failed:" .mysqli_connect_error());
}
?>