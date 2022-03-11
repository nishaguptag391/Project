<!-- <?php
include "navbar.php";
?>
<?php
// $servername="localhost";
// $user="root";
// $password="";
// $database="contact_page";

// //connection set
// $conn=mysqli_connect($servername,$user,$password,$database);
// if($conn){

// }
// else{
//     die("connection failed:" .mysqli_connect_error());
// }
// ?>

//  <?php
// if(isset($_post['submit'])){
//     $fullname=$_POST['fullname'];
//     $email=$_POST['email'];
//     $selectsubject=$_POST['selectsubject'];
//     $message=$_POST['message'];
//     $sql="INSERT INTO `user`(`full_name`, `email`, `select_message`, `message`)values ('$fullname', '$email', '$selectmessage', $message)";
//     $result=mysqli_query($conn, $sql);
//     if($result){
//         echo "new record created successfully";
//     } else{
//         echo "error:" . $sql."</br>" .mysql_error($conn);
//     }
// }
// ?>
// <?php
// $servername="localhost";
// $user="root";
// $password="";
// $database="form";

//  $conn=mysqli_connect($servername,$user,$password,$database);
// if($conn){
 
// }else{
//     die("Connection failed:" .mysqli_connect_error());
// }
// ?> -->
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
  <section class="hero-wrap hero-wrap-2 about_page_head"  style="background-image:url(https://preview.colorlib.com/theme/kayelux/images/xbg_2.jpg.pagespeed.ic.k2FHEGn_FG.webp); height: 739px;">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end">
    <div class="col-md-9 mt-5">
    <p class="breadcrumbs mt-123"><span class="me-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
    <h1 class="mb-5 bread">About Us</h1>
    </div>
    </div>
    </div>
    </section>
  <section class="Make_An_Appointment container" >
    <div class="col-lg-7">
      <div class="contact-wrap w-100 p-md-5 p-4">
        <h3>Contact Us</h3>
        <p class="mb-4">We're open for any suggestion or just to have a chat</p>
          <div class="row mb-4">
            <div class="colmd-4">
              <div class="dbox w-100 d-flex align-items-start">
                <div class="text">
                  <p><span>Address:</span><BR>
                    "198 West 21th Street, Suite 721, navi mumbai 400703.
                  </p>
                </div>
              </div>
            </div>
            <div class="col md-4">
              <div class="dbox w-100 d-flex align-items-start">
                <div class="text">
                  <p><span>Email:</span>
                    <a href="milto:info@yoursite.com">info@yoursite.com</a>
                  </p>
                </div>
              </div>
           </div>
           <div class="col md-4">
            <div class="dbox w-100 d-flex align-items-start">
              <div class="text">
                <p><span>phone:</span>
                  <a href="tel://9876543219">+91 9876543219</a>
                </p>
              </div>
            </div>
           </div>
           <div>
            <form id="contactForm" name="contactForm" class="c0ntactForm" action="">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-group" name="name" id="name" placeholder="Name">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="email" class="form-group" name="email" id="name" placeholder="Email">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-group" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="from-group">
                    <textarea name="message" class="from-control" id="message" cols="30" rows="7" placeholder="create a message here"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="from-group">
                    <input type="submit" value="send message" class="btn btn-primary">
                    <div class="submitting"></div>
                  </div>
              </div>
            </div>
            </form>
            <div class="w-100 social-media mt-5">
  
              <h3>Follow us here</h3>
              <p>
                <a href="#">Facebook</a> <a href="#">Twitter</a>
                <a href="#">Instagram</a>
                <a href="#">Dribbble</a> 
                </p>
               </div>
           </div>
        </div>
      </div>
      <div class="row col-md-5">
        <img src="https://preview.colorlib.com/theme/kayelux/images/image_8.jpg" style="width:100%" alt="" srcset="" class="img-fluid">
      </div>
    </div>
  </section>
</body>
<?php
include "footer.php";
?>
</html>