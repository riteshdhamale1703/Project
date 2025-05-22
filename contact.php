<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
{ 
   echo"Connection faield";
}

if(isset($_POST["email"])&&isset($_POST["name"]))
   { 
    
   $name=$_POST['name']; 
   $em= $_POST['email'];
   $sub=$_POST['subject'];
   $mess=$_POST['message'];
   
     $r=$c->query("SELECT * FROM login WHERE Email_ID='$em'" );
     if($r->num_rows > 0)
     {
       //Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'youtenantbooster@gmail.com';                     //SMTP username
    $mail->Password   = 'ysoh nael vgzg roac';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   
    $mail->setFrom('youtenantbooster@gmail.com', 'Tenant Boosters');
    $mail->addAddress($em, 'Tenant Boosters');     //Add a recipient
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$sub";
    $mail->Body    = " This mail is sent by $name. <br>
                       $mess

                       <br><br>
                       It is E-mail by <b> Boosters</b> From Contact E-mail box.
                        <br><br>
                        🇮🇳 Thank You🙂 <br>
                       YourTenantBoosters ";
    

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
     }

    }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        nav {
          display: flex;
          justify-content:center;

        }

        a {
          text-decoration: none;
          color: white;
        }
        
 .bta {
  position: relative;
  display: inline-block;
  padding: 5px 10px;
  color: #289bb8;
  font-size: 16px;
  text-decoration: none;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  letter-spacing: 2px;  
}
 
.bta:hover {
  background: #239eb9;
  color: #fff;
  border-radius: 30px;
  box-shadow: 0 0 5px #289bb8,
              0 0 25px #289bb8,
              0 0 50px #289bb8,
              0 0 100px #289bb8;
}
body {
              background-image: url('bg1.jpg');
            }
            </style>
    
</head>
    <!-- Favicon -->
    <link href="./favicon.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
<body>
    <style>
  h2,h3,h1
  {
    color:whitesmoke;
   text-align:center;
   margin-top:100px;
  } 
     </style>

  <!-- Navbar Start -->
  <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="home.php"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="./favicon.png"
                alt="Icon"
                style="width: 30px; height: 30px"
              />
            </div>
            <h1 class="m-0 text-primary">TENANT</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="home.php" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>

              <a href="payment.php" class="nav-item nav-link">Payment</a>
              <a href="profile.php" class="nav-item nav-link">Profile</a>
              <a href="transcation.php" class="nav-item nav-link">History</a>
              <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="logout.php" class="btn btn-primary px-3 d-none d-lg-flex">Log out</a>
          </div>
        </nav>
      </div>

      <h1> Your E-Mail is Send Sucsessfully!! 🙂 </h1>

       <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<html>