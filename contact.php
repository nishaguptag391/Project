<?php
include "navbar.php";
?>
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

 $conn=mysqli_connect($servername,$user,$password,$database);
if($conn){
 
}else{
    die("Connection failed:" .mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beauty Care | Home</title>
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->

  <link rel="stylesheet" href="./asset/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section class="Make_An_Appointment container" >
  <h1 class="text-center"style="margin-top: 80px;">Make An Appointment</h1>
  <div class="row">
    <div class="col-md-6">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
    <div class="col-md-6">
      <img src="./images/responsive.jpeg" alt="" srcset="" class="img-fluid">
    </div>
  </div>
</section>
</body>
<?php
include "footer.php";
?>
</html>